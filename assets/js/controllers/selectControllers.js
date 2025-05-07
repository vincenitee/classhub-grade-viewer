import { locationSelects, academicSelects } from "../domElements/index.js";

import { setSelectDisabled } from "../helpers/manageStates.js";

import { populateSelect } from "../helpers/populateSelect.js";

import fetchData from "../services/apiServices.js";

import { showValidationMessage } from "../utils/alerts.js";


export function initializeSelects() {
  const {
    region: regionSelect,
    province: provinceSelect,
    municipality: municipalitySelect,
    brgy: brgySelect,
  } = locationSelects;

  const {
    year: yearSelect,
    strand: strandSelect,
    section: sectionSelect,
  } = academicSelects;

  /**
   * Loads the inital state of the 2 select elements
   */

  fetchInitalSelectData(regionSelect, yearSelect);

  /**
   * Listens to the changes of value on location select elements
   */
  if(yearSelect){
      yearSelect.addEventListener("change", () => {
        handleYearChange(yearSelect, sectionSelect, strandSelect);
      });
  }
  
  regionSelect.addEventListener("change", () => {
    handleRegionChange(regionSelect, provinceSelect);
  });
  provinceSelect.addEventListener("change", () => {
    handleProvinceChange(provinceSelect, municipalitySelect);
  });
  municipalitySelect.addEventListener("change", () => {
    handleMunicipalityChange(municipalitySelect, brgySelect);
  });
}

async function fetchInitalSelectData(regionSelect, yearSelect) {
  const REGION_URL = "../fetch-places.php";
  const YEAR_URL = "../fetch-years.php";

  try {
    await Promise.all([
      fetchAndPopulate(REGION_URL, regionSelect, false),
      fetchAndPopulate(YEAR_URL, yearSelect, false),
    ]);
  } catch (error) {
    console.error(error);
    showValidationMessage("Oops...", "error", "Error Fetching Data");
  }
}

async function handleYearChange(yearSelect, sectionSelect, strandSelect) {
  const yearId = yearSelect.value;

  if (yearId) {
    const SECTION_URL = `../fetch-sections.php?yearId=${yearId}`;
    const STRAND_URL = `../fetch-strands.php?yearId=${yearId}`;

    try {
      await Promise.all([
        fetchAndPopulate(SECTION_URL, sectionSelect, false),
        fetchAndPopulate(STRAND_URL, strandSelect, false),
      ]);
    } catch (error) {
      console.error(error);
    }
  }
}

async function handleRegionChange(regionSelect, provinceSelect) {
  const regionId = regionSelect.value;

  if (regionId) {
    const PROVINCE_URL = `../fetch-places.php?regionId=${regionId}`;
    await fetchAndPopulate(PROVINCE_URL, provinceSelect, false);
  }
}

async function handleProvinceChange(provinceSelect, municipalitySelect) {
  const provinceId = provinceSelect.value;

  if (provinceId) {
    const MUNICIPALITY_URL = `../fetch-places.php?provinceId=${provinceId}`;
    await fetchAndPopulate(MUNICIPALITY_URL, municipalitySelect, false);
  }
}

async function handleMunicipalityChange(municipalitySelect, brgySelect) {
  const municipalityId = municipalitySelect.value;

  if (municipalityId) {
    const BRGY_URL = `../fetch-places.php?municipalityId=${municipalityId}`;
    await fetchAndPopulate(BRGY_URL, brgySelect, false);
  }
}

async function fetchAndPopulate(url, select, disabled = true) {
  setSelectDisabled(select, disabled);

  try {
    const options = await fetchData(url);

    if (select && options) {
      populateSelect(select, options);
    }
  } catch (error) {
    console.error("Unable to fetch data: ", error);
    populateSelect(select, []);
  }
}
