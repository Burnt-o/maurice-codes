
// recursively loop thru elements children and add/remove is-visible class
function setClassRecursively(element, classname, value)
{
  Array.from(element.children).forEach((e) => {
  value ? e.classList.add(classname) : e.classList.remove(classname);

  });
}


function setHasBeenVisibleRecursively(element, value)
{
  Array.from(element.children).forEach((e) => {

    if (value)
    {
      e.classList.add('has-been-visible'); 

      if (e.children.length > 0) 
      {
        setHasBeenVisibleRecursively(e, value);
      }
    } 
    

    });
}

// observer callback
function setVisibilityCallback(entries, observer)
{
  entries.forEach(entry => {
    setClassRecursively(entry.target, "is-visible", entry.isIntersecting);
    setHasBeenVisibleRecursively(entry.target, entry.isIntersecting);
  });
}




function lightTriggerCallback(entries, observer)
{

  // if ANY entry is intersecting, then set lights to true. else set to false.
  $areLightsTriggered = entries.some(entry => {
    return entry.isIntersecting;
  });

  console.log("setting light trigger to " + $areLightsTriggered);

  document.querySelectorAll('.observe-lights').forEach(el => {
    $areLightsTriggered ? el.classList.add("lights-active") : el.classList.remove("lights-active");
    setClassRecursively(el, "lights-active", $areLightsTriggered);
   });

}



let options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.2
  };

let observerSetVisibility = new IntersectionObserver(setVisibilityCallback, options);
let observerLightTrigger = new IntersectionObserver(lightTriggerCallback, options);


// observe all elements with the observe-visibility class
   document.querySelectorAll('.observe-visibility').forEach(el => {
    observerSetVisibility.observe(el);
   });

   document.querySelectorAll('.light-trigger').forEach(el => {
    observerLightTrigger.observe(el);
   });
