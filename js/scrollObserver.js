window.addEventListener(
  "scroll",
  () => {
    let percentScroll = window.scrollY / (document.documentElement.scrollHeight - window.innerHeight);
    document.body.style.setProperty(
      "--scroll",
      percentScroll
    );
  },
  false
);