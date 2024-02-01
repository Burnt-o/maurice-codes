
// recursively loop thru elements children and add/remove is-visible class
function setVisibility(element, value)
{
  Array.from(element.children).forEach((e) => {
  console.log('ok');
  value ? e.classList.add('is-visible') : e.classList.remove('is-visible');

  if (value)
  {
    e.classList.add('has-been-visible'); 
  } 
  if (e.children.length > 0) 
  {
    setVisibility(e, value);
  }
  });
}

// observer callback
function callbackFunc(entries, observer)
{
  entries.forEach(entry => {
    setVisibility(entry.target, entry.isIntersecting);
  });
}

let options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.2
  };

let observer = new IntersectionObserver(callbackFunc, options);

// observe all elements with the observe-visibility class
   document.querySelectorAll('.observe-visibility').forEach(el => {
    observer.observe(el);
   });

