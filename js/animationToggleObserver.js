// Listen to animation-toggle checkbox change event. 
// On change, select all elements with "animation-toggle-listener" class and add or remove "animations-toggle-enabled" class (& recursively to all children) per checkbox state.

// add event listener
var checkbox = document.querySelector("input[name=animation-toggle]");
checkbox.addEventListener('change', function() {
    setAnimationToggle(this.checked);
});

// Need to fire off the initial state just once
setAnimationToggle(checkbox.checked);


function setAnimationToggle(value)
{
  document.querySelectorAll('.animation-toggle-listener').forEach(el => {
    value ? el.classList.add("animation-toggle-enabled") : el.classList.remove("animation-toggle-enabled");
    setClassRecursively(el, "animation-toggle-enabled", value);
  });
}

function setClassRecursively(element, classname, value)
{
  Array.from(element.children).forEach((e) => {
  value ? e.classList.add(classname) : e.classList.remove(classname);
  setClassRecursively(e, classname, value);
  });
}