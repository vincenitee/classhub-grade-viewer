import { selectById, selectChildren } from '../utils/dom.js';

const regionSelect = selectById('region-select');

document.addEventListener('DOMContentLoaded', () => {
    fetchRegions()
})

regionSelect.addEventListener('change', () => {
    const regionId = regionSelect.value;
    
    if(regionId != ''){
        fetchProvinces(regionId);
    }
})

async function fetchRegions(){
    try{
        const response = await axios.get('fetch-regions.php');
        const regions = response.data;
        
        if(regionSelect && regions){
            populateSelect(regionSelect, regions);
        }
    } catch(error){
        console.error('Unable to fetch regions: ', error);
    }
}

async function fetchProvinces(regionId) {
    try{
        const response = await axios.get(`fetch-provinces.php?regionId=${regionId}`);
        const provinces = response.data;

        console.log(provinces);

        const provinceSelect = selectById('province-select');

        if(provinceSelect && provinces){
            populateSelect(provinceSelect, provinces)
        }

    } catch(error){
        console.error('Unable to fetch provinces', error);
    }
}

function populateSelect(select, options){
    clearOptions(select);

    if(select.disabled){
        select.disabled = false;
    }

    const mappedOptions = mapToGeneric(options)

    mappedOptions.forEach(option => {
        const optionElement = new Option(option.value, option.id);
        select.appendChild(optionElement);
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
