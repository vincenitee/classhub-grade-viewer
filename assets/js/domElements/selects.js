import { selectById } from '../utils/index.js';

export const academicSelects = {
    'year': selectById('yearlevel-select'),
    'section': selectById('section-select'),
    'strand': selectById('strand-select')
}

export const locationSelects = {
    'region': selectById('region-select'),
    'province': selectById('province-select'),
    'municipality': selectById('municipality-select'),
    'brgy': selectById('barangay-select')
}