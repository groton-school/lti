# @groton-school/slim-lti-skeleton

## Install

### For local development

#### gRPC

Make sure that [gRPC](https://cloud.google.com/php/grpc) is installed so that the current version of Firestore can be used (on macOS, it's worth checking to see if the `pecl` symlink in the active PHP installation is valid, per [this note](https://yarnaudov.com/php-pecl-module-install-warning-mkdir-file-exists-fix.html)).

### For deployment on Google App Engine

#### Node

Make sure that [Node](https://nodejs.org/en) is installed, as the deploy script runs on node.

```sh
npm install # deploy script dependencies (one-time)
node bin/deploy.js # to GAE as changes are made
```

On first deployment, this will run you through the Google App Engine project creation, the only prerequisite for which is that you must already have a [Google Cloud billing account](https://console.cloud.google.com/billing) configured. (This has to be done interactively, and cannot be scripted for security reasons.)