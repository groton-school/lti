# LTI Tool running on Google App Engine

## Notes

This project was created from the [slim-skeleton](https://github.com/groton-school/slim-skeleton#readme):

```sh
composer create-project --ask --stability dev --repository "{\"type\":\"vcs\",\"url\":\"https://github.com/groton-school/slim-skeleton\"}" groton-school/slim-skeleton "dev-lti/gae"
```

In [app/settings.php](./app/settings.php), `$TOOL_NAME` was updated, and then it was ready to be deployed to Google App Engine:

````console
> pnpm run deploy
✔ Google Cloud project name LTI Google App Engine example
✔ Google Cloud project unique identifier <unique id>
Install your LTI by going adding an LTI Registration in Developer Keys for https://<unique id>.uk.r.appspot.com/lti/register

If you haven't done that before, follow these directions: https://community.canvaslms.com/t5/Admin-Guide/How-do-I-add-a-developer-LTI-Registration-key-for-an-account/ta-p/601370

You will then need to enable the app following these directions: https://community.canvaslms.com/t5/Admin-Guide/How-do-I-configure-an-external-app-for-an-account-using-a-client/ta-p/202```
````

At this point, as the console indicates, you can follow the linked directions to install the LTI in Canvas (or another LMS). This LTI creates a single placement in course navigation that will display the contents of the LTI Launch Message when launched.

- The placement configuration is done in [app/settings.php](./app/settings.php) by the `Settings::TOOL_REGISTRATION` property, specifically `Settings::TOOL_REGISTRATION[https://purl.imsglobal.org/spec/lti-tool-configuration][messages][placements]`.
- The behavior of the app is described in [src/Application/Handlers/LaunchHandler.php](./src/Application/Handlers/LaunchHandler.php).
