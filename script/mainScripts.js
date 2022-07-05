'use strict';

function scrollTo(location){
    document.getElementById(location).scrollIntoView();
}
document.getElementById('seeMyWork').addEventListener("click", function(){scrollTo('aboutMe');});