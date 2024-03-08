
**Todo:**


Performance:
 * replace background images with smaller file size jpgs -> actually webp with jpg backup

Fix zoom responsiveness by adjusting font (and project-info & contact containers & background images) to be based on parent container size instead of screen size

Cleanup global css by making them only included in html containers that should use them

Minimalist design pass on hero image

Fix home/contact anchor tags.

Add robots.txt so stop images being crawled (ouch my bandwidth)

Replace "tag" button class with just a span or div but like same styling (confuses screenreaders/crawlers etc)

Defer non-criticle js/styles. mainly the projectinfo.css needs deferring cause it's huge (TODO: reduce max number of tags to reduce file size) https://www.giftofspeed.com/defer-loading-css/

MUST defer jquery shit, takes WAY too long (will mean deferring any scripts that use jquery too) (must remember to set default values for props like scroll-percent, aspect-ratio) https://stackoverflow.com/questions/5852767/possible-to-defer-loading-of-jquery

setup caching for images https://developer.chrome.com/docs/lighthouse/performance/uses-long-cache-ttl/?utm_source=lighthouse&utm_medium=lr

buy and setup domain name
burnt.codes 93/yr
maurice-codes.com.au 27/yr
maurice-codes.com 16/yr
burnt-codes.com 16/yr

setup email 