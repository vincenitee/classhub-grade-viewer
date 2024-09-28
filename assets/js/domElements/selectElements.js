import { selectById } from '../utils/index.js';

export const academicSelects = {
    'yearSelect': selectById('yearlevel-select'),
    'sectionSelect': selectById('section-select'),
    'strandSelect': selectById('strand-select')
}

export const locationSelects = {
    'regionSelect': selectById('region-select'),
    'provinceSelect': selectById('province-select'),
    'municipalitySelect': selectById('municipality-select'),
    'brgySelect': selectById('barangay-select')
}