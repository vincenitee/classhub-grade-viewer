import { showValidationMessage } from '../utils/alerts.js';
import { selectById, selectChildren } from '../utils/dom.js';

const regionSelect = selectById('region-select');
const provinceSelect = selectById('province-select');
const municipalitySelect = selectById('municipality-select');
const brgySelect = selectById('barangay-select');

const yearSelect = selectById('yearlevel-select');
const sectionSelect = selectById('section-select');
const strandSelect = selectById('strand-select');

document.addEventListener('DOMContentLoaded', () => {
    const regionUrl = 'fetch-places.php';
    fetchAndPopulate(regionUrl, regionSelect, false);
    
    const yearUrl = 'fetch-years.php';
    fetchAndPopulate(yearUrl, yearSelect, false);  
})

yearSelect.addEventListener('change', () => {
    const yearId = yearSelect.value;

    if(yearId !== '' && yearId){
        const sectionUrl = `fetch-sections.php?yearId=${yearId}`;
        fetchAndPopulate(sectionUrl, sectionSelect, false)

        const strandUrl = `fetch-strands.php?yearId=${yearId}`;
        fetchAndPopulate(strandUrl, strandSelect, false);
    }
})  

regionSelect.addEventListener('change', () => {
    const regionId = regionSelect.value;
    
    if(regionId !== '' && regionId){
        const provinceUrl = `fetch-places.php?regionId=${regionId}`;
        fetchAndPopulate(provinceUrl, provinceSelect, false);
    }
})

provinceSelect.addEventListener('change', () =>{
    const provinceId = provinceSelect.value;

    if(provinceId !== '' && provinceId){
        const municipalityUrl = `fetch-places.php?provinceId=${provinceId}`;
        fetchAndPopulate(municipalityUrl, municipalitySelect, false);
    }
})

municipalitySelect.addEventListener('change', () => {
    const municipalityId = municipalitySelect.value;

    if(municipalityId !== '' && municipalityId){
        const brgyUrl = `fetch-places.php?municipalityId=${municipalityId}`;
        fetchAndPopulate(brgyUrl, brgySelect, false);
    }
})

// Refractored function
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
        showValidationMessage('Oops...', 'error', 'Failed to load data, try again later');
    }
}

async function fetchData(url){
    try{
        const response = await axios.get(url);

        if(response.status !== 200){
            throw new Error(`Failed with status code: ${response.status}`);
        } 

        console.log(response);

        return response.data;
    } catch(error){
        console.error('Unable to fetch data', error);
        showValidationMessage('Oops...', 'error', 'Failed to load data, try again later');
        throw error;
    }
}

function populateSelect(select, options){
    clearOptions(select);

    if(select.disabled){
        disableSelect(select)
    }

    if(options.length === 0){
        select.add(new Option('No Options Available', ''))
        return;
    }

    const mappedOptions = mapToGeneric(options)

    mappedOptions.forEach(option => {
        select.add(new Option(option.value.toUpperCase(), option.id));
    })
}

function mapToGeneric(data){
    return data.map(item => ({
        id: item[0],
        value: item[1]
    }));
}

function clearOptions(select){
    const options = selectChildren(select, 'option');

    options.forEach(option => {
        if(option.value != ''){
            select.removeChild(option);
        }
    })
}

function disableSelect(select){
    select.disabled = true;
}

function enableSelect(select){
    select.disabled = false;
}
