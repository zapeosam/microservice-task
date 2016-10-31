This has no conditions 
---------------------------
- target type "text/html" ....

This has no error handling
---------------------------

Needs handling
- invalid routes should return HTTP_NOT_FOUND
- non existent url should return HTTP_NOT_FOUND 
- wrong target types should return HTTP_UNSUPPORTED_MEDIA_TYPE
- .... 

It would need a custom "Event listener" e.g. exeptionlistener class 