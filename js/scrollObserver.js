window.addEventListener(
  "scroll",
  () => {
    let percentScroll = window.pageYOffset / (document.body.offsetHeight - window.innerHeight);
    document.body.style.setProperty(
      "--scroll",
      percentScroll
    );
    console.log(percentScroll);
  },
  false
);