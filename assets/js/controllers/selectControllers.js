import {
    locationSelects,
    academicSelects
} from '../domElements/index.js'

import {  
    enableSelect, 
    disableSelect 
} from '../helpers/manageSelectState.js';

import { populateSelect } from '../helpers/populateSelect.js';

import fetchData from '../services/apiServices.js';

import { showValidationMessage } from '../utils/alerts.js';

console.log(locationSelects);

export function initializeSelects(){
    const {
        regionSelect, 
        provinceSelect,
        municipalitySelect,
        brgySelect
    } = locationSelects;

    const {
        yearSelect,
        strandSelect,
        sectionSelect
    } = academicSelects;

    /**
     * Loads the inital state of the 2 select elements
     */

    fetchInitalSelectData(regionSelect, yearSelect);

    /**
     * Listens to the changes of value on location select elements
     */
    yearSelect.addEventListener('change', () => {handleYearChange(yearSelect, sectionSelect, strandSelect)});
    regionSelect.addEventListener('change', () => {handleRegionChange(regionSelect, provinceSelect)});
    provinceSelect.addEventListener('change', () => {handleProvinceChange(provinceSelect, municipalitySelect)});
    municipalitySelect.addEventListener('change', () => {handleMunicipalityChange(municipalitySelect, brgySelect)})
}

/**
 * Initilizes both the region and year select elements
 * @param {HTMLSelectElement} regionSelect
 * @param {HTMLSelectElement} yearSelect
 */
async function fetchInitalSelectData(regionSelect, yearSelect) {
    const regionUrl = 'fetch-places.php';
    const yearUrl = 'fetch-years.php';

    try{
        await Promise.all([
            fetchAndPopulate(regionUrl, regionSelect, false),
            fetchAndPopulate(yearUrl, yearSelect, false)
        ])
    } catch(error){
        console.error(error);
        showValidationMessage('Oops...', 'error', 'Error Fetching Data');
    }
}

async function handleYearChange(yearSelect, sectionSelect, strandSelect){
    const yearId = yearSelect.value;

    if(yearId){
        const sectionUrl = `fetch-sections.php?yearId=${yearId}`;
        const strandUrl = `fetch-strands.php?yearId=${yearId}`;

        try{
            await Promise.all([
                fetchAndPopulate(sectionUrl, sectionSelect, false),
                fetchAndPopulate(strandUrl, strandSelect, false)
            ])
        } catch(error){
            console.error(error);
        }
    }
}

async function handleRegionChange(regionSelect, provinceSelect){
    const regionId = regionSelect.value;

    if(regionId){
        const provinceUrl = `fetch-places.php?regionId=${regionId}`;
        await fetchAndPopulate(provinceUrl, provinceSelect, false);
    }
}

async function handleProvinceChange(provinceSelect, municipalitySelect){
    const provinceId = provinceSelect.value;

    if(provinceId){
        const municipalityUrl = `fetch-places.php?provinceId=${provinceId}`;
        await fetchAndPopulate(municipalityUrl, municipalitySelect, false);
    }
}

async function handleMunicipalityChange(municipalitySelect, brgySelect){
    const municipalityId = municipalitySelect.value;

    if(municipalityId){
        const municipalityUrl = `fetch-places.php?municipalityId=${municipalityId}`;
        await fetchAndPopulate(municipalityUrl, brgySelect, false);
    }
}

async function fetchAndPopulate(url, select, disabled = true){
    if(disabled){
        disableSelect(select);
    } else{
        enableSelect(select);
    }
    
    try{
        const options = await fetchData(url);

        if(select && options){
            populateSelect(select, options);
        }

    } catch(error){
        console.error('Unable to fetch data: ', error);
        populateSelect(select, [])
    }
}