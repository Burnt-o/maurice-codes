window.addEventListener(
  "scroll",
  () => {
    let percentScroll = window.scrollY / (document.body.offsetHeight - window.innerHeight);
    percentScroll = percentScroll * -0.01;
    document.body.style.setProperty(
      "--scroll",
      percentScroll
    );
     console.log(percentScroll);
  },
  false
);