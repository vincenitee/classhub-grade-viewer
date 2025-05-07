import { select, selectById } from "../utils/dom.js";

export const components = {
    'navbar': select('nav'),
    'sidebar': selectById('sidebar')
}