

function callbackFunc(entries, observer)
{
  entries.forEach(entry => {

    if (entry.isIntersecting)
    {
      // animate
      entry.target.classList.toggle("is-inViewport")
      //entry.target.classList.add('is-visible');
      //observer.unobserve(entry.target)
    }

    var txt = entry.target.id + " visibility: " + entry.isIntersecting;
    document.getElementById('log').appendChild(document.createTextNode(txt));
    document.getElementById('log').appendChild(document.createElement("br"));


  });
}

let options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.3
  };

let observer = new IntersectionObserver(callbackFunc, options);



   document.querySelectorAll('.projectInfo').forEach(el => {
    observer.observe(el);
   });

