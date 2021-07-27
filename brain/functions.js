function popupCenter (url, title, w, h) {
  var left = (screen.width/2)-(w/2);
  var top = (screen.height/2)-(h/2);
  return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
} 


/** AP Web Utility
 *  Query current breakpoint in bootstrap style. 
 *  Examples:
 *  
 *  console.log(breakpointIs("xs", "only"));
 *  console.log(breakpointIs("md", "down"));
 *  console.log(breakpointIs("lg", "up"));
 */
function breakpointIs (breakpointName, compare) {
  var breakpoints = [
    { "name": "xs", "index": 1, "minWidth": 0 },
    { "name": "sm", "index": 2, "minWidth": 576 },
    { "name": "md", "index": 3, "minWidth": 768 },
    { "name": "lg", "index": 4, "minWidth": 992 },
    { "name": "xl", "index": 5, "minWidth": 1200 },
  ];
  var w = window.innerWidth;
  var current = breakpoints[0];
  breakpoints.forEach(function (b, i) {
    if (w > b.minWidth) {
      current = b;
    }
  });
  // console.log("current", current.name);
  var breakpoint = breakpoints.find(function (e) { return e.name === breakpointName });
  if (!breakpoint) {
    throw "(30298140) Unknown breakpointName "+ breakpointName;
  }
  var breakpointIndex = breakpoint.index;
  if (compare === "only") {
    return (current.index === breakpointIndex);
  } else if (compare === "down") {
    return current.index <= breakpointIndex;
  } else if (compare === "up") {
    return current.index >= breakpointIndex;
  }
}


/**
 *  Clean a URL leaving domain only
 */
function urlDomain (url) {
  var a = document.createElement('a');
  a.href = url;
  return a.hostname;
}


/**
 *  via p5 code
 *  https://github.com/processing/p5.js/blob/master/src/math/calculation.js
 *  dependency: apConstrain
 */
function apMap (n, start1, stop1, start2, stop2, withinBounds) {
  const newval = (n - start1) / (stop1 - start1) * (stop2 - start2) + start2;
  if (!withinBounds) {
    return newval;
  }
  if (start2 < stop2) {
    return apConstrain(newval, start2, stop2);
  } else {
    return apConstrain(newval, stop2, start2);
  }
}


/**
 * Like Processing's constrain function
 */
function apConstrain (n, low, high) {
  return Math.max(Math.min(n, high), low);
}


/**
 * https://stackoverflow.com/a/901144/2501713
 */
function getParameterByName(name, url) {
  if (!url) url = window.location.href
  name = name.replace(/[\[\]]/g, "\\$&")
  var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
      results = regex.exec(url)
  if (!results) return null
  if (!results[2]) return ''
  return decodeURIComponent(results[2].replace(/\+/g, " "))
}
