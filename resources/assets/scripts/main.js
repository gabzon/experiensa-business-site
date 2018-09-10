// import external dependencies
import 'jquery';

// Import everything from autoload
import "./autoload/**/*"

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';
import library from './routes/library';
import filter from './routes/filter';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
  // Media library page contains all photos and videos in the media.experiensa.com
  library,
  filter,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
