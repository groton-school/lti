# groton-school/lti

## Acknowledgements

Below are a number of resources that I found useful in implementing this:

- [1EdTech's unmaintained lti-1-3-php library](https://github.com/1EdTech/lti-1-3-php-library) gave some helpful information about endpoints.
- [1EdTech;s unmaintined lti-1-3-php-example-tool](https://github.com/1EdTech/lti-1-3-php-example-tool/tree/master) gave some insight into the intended use of their library and further insights into the behavior of endpoints.
- [Packback's lti-1-3-php-library](https://github.com/packbackbooks/lti-1-3-php-library) is actual useful, maintained code on which this depends!
- [Packback's wiki for that library](https://github.com/packbackbooks/lti-1-3-php-library/wiki) was helpful in thinking through their implementation but is (as of this writing) lagging behind their actual implementation by a bit, I think.
- [My own notes in this Packback issue](https://github.com/packbackbooks/lti-1-3-php-library/issues/69) regarding making a full implementation.
- Obviously the [Slim Framework](https://www.slimframework.com/docs/v4/) and their [Slim-Skeleton](https://github.com/slimphp/Slim-Skeleton/tree/main) were helpful starting points for the structure of the Slim app! I find it more useful to bring in the pieces of the skeleton as-needed, rather than starting with the app template.
- The [LTI Debugger Chrome Extension](https://chromewebstore.google.com/detail/lti-debugger/cpjdeioljkbgkldnbojoagdoiggnlhll) which adds another tab to the Developer Console, which was about the only thing of value that I was able to pull from [1EdTech's LTI Bootcamp](https://github.com/1EdTech/ltibootcamp), which everyone else links to as a great resource. It may prove useful as I get more into the specifics of deep linking?

## Dynamic Registration

Looking ahead, I intend to implement dynamic registration. I am finding the following helpful in this (although the choice between LTI 1.3 Dynamic Registration and LTI 2.0 Dynamic Registration is unclear to me -- the former seems like the path forward, while the latter seems to exist in the wild.)

- [Rahul Khedekar's LTI 1.3 Dynamic Registration Process](https://blog.nonstopio.com/lti-1-3-dynamic-registration-process-cf0bdbfc2a29)
- [1EdTech (née IMS Global)'s LTI Dynamic Registration Spec v1.0](https://www.imsglobal.org/spec/lti-dr/v1p0)
- [1EdTech (née IMS Global)'s LTI v2.0 Implementation Guide](https://www.imsglobal.org/specs/ltiv2p0/implementation-guide)
- [Anthology's Registering and Managing a REST or LTI Application](https://docs.anthology.com/docs/developer-portal/creating-new-rest-or-lti-application)
- [LTIASS's Performing Dynamic Registration](https://docs.ltiaas.com/guides/api/dynamic-registration/)
