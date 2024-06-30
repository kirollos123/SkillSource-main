

/********************* Menu Js **********************/

//  Window scroll sticky class add
function windowScroll() {
    const navbar = document.getElementById("navbar");
    if (
        document.body.scrollTop >= 50 ||
        document.documentElement.scrollTop >= 50
    ) {
        navbar.classList.add( "shadow", "nav-sticky");
    } else {
        navbar.classList.remove( "shadow", "nav-sticky");
    }
}

window.addEventListener('scroll', (ev) => {
    ev.preventDefault();
    windowScroll();
})


//menu active & scrollspy
var sections = document.querySelectorAll('.section');
window.onscroll = function () {
    var scrollPos = document.documentElement.scrollTop || document.body.scrollTop;
    for (var elem in sections) {
        if (sections.hasOwnProperty(elem) && (sections[elem].offsetTop - 105) <= scrollPos) {
            var id = sections[elem].id;
            if (id) {
                document.querySelector('#navbar .navbar-nav .active').classList.remove('active');
                document.querySelector('#navbar .navbar-nav .nav-link[href*=' + id + ']').parentNode.classList.add('active');
            }
        }
    }
};

function initActiveMenu() {
    var currentPath = location.pathname == "/" ? "index.html" : location.pathname.substring(1);
    currentPath = currentPath.substring(currentPath.lastIndexOf("/") + 1);
    if (currentPath) {
        var a = document.getElementById("navigation-menu").querySelector('li a[href="' + currentPath + '"]');
        if (a) {
            a.classList.add("active");
            var parentCollapseDiv = a.closest(".dropdown-menu");
            if (parentCollapseDiv) {
                if (parentCollapseDiv.parentElement.classList.contains('dropdown')) {
                    parentCollapseDiv.parentElement.children[0].classList.add("active");
                    console.log("test", parentCollapseDiv.parentElement)
                    if (parentCollapseDiv.parentElement.classList.contains('dropdown')) {
                        parentCollapseDiv.parentElement.children[0].classList.add("active");
                    }
                }
            }
        }
    }
}

// navbar toggler
document.getElementById("navbar").querySelector(".navbar-toggler").addEventListener("click", function () {
    var getAttr = this.getAttribute("data-collapse-toggle");
    if (document.getElementById(getAttr).classList.contains("hidden")) {
        document.getElementById(getAttr).classList.remove("hidden");
    } else {
        document.getElementById(getAttr).classList.add("hidden");
    }
});

window.addEventListener('resize', function(){
    document.getElementById('navbar-collapse').classList.add("hidden");
});

document.addEventListener('DOMContentLoaded', function() {
document.getElementById('addSkill').addEventListener('click', function() {
    var input = document.querySelector('input[name="Skills"]');
    var list = document.getElementById('skillList');
    var value = input.value.trim(); // Trim whitespace

    if (value) { // Only add if the input is not empty
    var li = document.createElement('li');
    li.textContent = value;
    li.classList.add('p-2', 'bg-black', 'rounded', 'text-white');
    li.style.marginRight = '0.2rem';
    li.style.marginTop = '0.2rem';
    list.appendChild(li);
    

    input.value = ''; // Clear the input field
    }
});
document.getElementById('addQualification').addEventListener('click', function() {
    var input = document.querySelector('input[name="Qualifications"]');
    var list = document.getElementById('QualificationList');
    var value = input.value.trim(); // Trim whitespace

    if (value) { // Only add if the input is not empty
    var li = document.createElement('li');
    li.textContent = value;
    li.classList.add('p-2', 'bg-black', 'rounded', 'text-white');
    li.style.marginRight = '0.2rem';
    li.style.marginTop = '0..1.5rem';
    list.appendChild(li);
    

    input.value = ''; // Clear the input field
    }
});

var form = document.querySelector('form'); // Adjust the selector if needed

form.addEventListener('submit', function(event) {
  // Prevent the form from submitting immediately
  event.preventDefault();

  // Handle Qualifications
  var qualificationListItems = document.querySelectorAll('#QualificationList li');
  qualificationListItems.forEach(function(item, index) {
    var input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'Qualifications[]'; // Use array notation for the name
    input.value = item.textContent;
    form.appendChild(input);
  });

  // Handle Skills
  var skillListItems = document.querySelectorAll('#skillList li');
  skillListItems.forEach(function(item, index) {
    var input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'Skills[]'; // Use array notation for the name
    input.value = item.textContent;
    form.appendChild(input);
  });

  // Now submit the form
  form.submit();
});
});

initActiveMenu();