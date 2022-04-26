require ('./bootstrap');

import { renderEditButton } from './edit-button.js';
import { renderMenuButton } from './menu-button.js';
import { renderEditTabs } from './edittabs.js';
import { renderSaveButton } from './savebutton.js';
// import { renderCancelButton } from './cancelbutton.js';
import { renderEditTabsLocal } from './edittabs-local.js';


renderEditButton();
renderMenuButton ();
renderEditTabs ();
renderSaveButton ();
// renderCancelButton ();
renderEditTabsLocal ();

// import { renderFilterButton } from './filter-button.js';
// renderFilterButton ();