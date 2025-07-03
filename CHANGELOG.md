# Changelog

All notable changes to this project will be documented in this file. See [commit-and-tag-version](https://github.com/absolute-version/commit-and-tag-version) for commit guidelines.

## 1.1.0 (2025-07-03)


### Features

* add LaunchHandler interface ([1dafc34](https://github.com/groton-school/lti/commit/1dafc34c91f54f309dbe62bdc678dab836102ad7))
* **firestore-http-basic-authenticator:** initial commit ([23024d0](https://github.com/groton-school/lti/commit/23024d057458dedfbe191dcfe866d1cddf746f9d))
* initial commit ([5bd3073](https://github.com/groton-school/lti/commit/5bd3073c6380e007ab738a8179428b91fecc802f))
* initial commit ([ca14bcc](https://github.com/groton-school/lti/commit/ca14bcc0723d7180e710603adda488869a053a77))
* **lti-registration-builder:** initial commit ([37de56d](https://github.com/groton-school/lti/commit/37de56d152d92a24ea1ca1baaead902ea70df016))
* **slim-action:** reusable action for LTI implementations ([aec55ba](https://github.com/groton-school/lti/commit/aec55ba88aa844542b6d98b0c912ad5417270138))
* **slim-gae-shim:** replace getName() with getProjectUrl() ([f161e0e](https://github.com/groton-school/lti/commit/f161e0e8ff62bb3bbfb083b6cafe2ac9353a9824))
* **slim-gae-shim:** routes and dependencies to run a Slim app on Google App Engine ([2201cd2](https://github.com/groton-school/lti/commit/2201cd26691a939ae5c3bfcd9f16b3fa65615eee))
* **slim-lti-infrastructure-gae:** cache configuration data during interactive registration ([f4faa20](https://github.com/groton-school/lti/commit/f4faa204eab70baeba7196d43ffb48b08796cc4f))
* **slim-lti-infrastructure-gae:** implement CacheInterface ([bb3974c](https://github.com/groton-school/lti/commit/bb3974c457e7d0f3e34a048f484f61b2b27dc45d))
* **slim-lti-infrastructure-gae:** implement Firestore backing for packbackbooks/lti-1p3-tool on GAE ([dfac545](https://github.com/groton-school/lti/commit/dfac5454ff86ade4401258dde5dc55ad0a620986))
* **slim-lti-shim:** accept JsonSerializable tool configuration as well as associative array ([f39eaf5](https://github.com/groton-school/lti/commit/f39eaf5d44639e21e03f78b2f846bea8932d36c1))
* **slim-lti-shim:** interactive configuration hook ([05a4b34](https://github.com/groton-school/lti/commit/05a4b34818d9bd6cb17afa283f86ad5f04a72588))
* **slim-lti-shim:** more consistent setting names ([80b7f70](https://github.com/groton-school/lti/commit/80b7f70c7736a159ded5b0d0c4b9f9437ec727da))
* **slim-lti-shim:** shim packbackbooks\lti-1p3-tool into Slim app ([050b574](https://github.com/groton-school/lti/commit/050b57473dc23d4d6fa17662d0330e3d7ca152a4))
* **slim-lti-skeleton:** configure GAE LTI endpoints, infrastructure ([6961b81](https://github.com/groton-school/lti/commit/6961b81ecc05d876123761391536f08a9fc3574f))
* **slim-lti-skeleton:** implement LTI as Slim app on GAE ([01d6bd0](https://github.com/groton-school/lti/commit/01d6bd017cd16b215d4f42feeb8e1e2efa0b6ff8))
* **slim-lti-skeleton:** merge in casbin/casbin-with-slim Authorization middleware ([330f1b7](https://github.com/groton-school/lti/commit/330f1b74b23aab2ba18e970e487bb8efca70b5f8))
* **slim-lti-skeleton:** publishable to GAE ([39dfc15](https://github.com/groton-school/lti/commit/39dfc15c7f36c6739c777abb720e08b8fe8a982d))
* **slim-lti-skeleton:** publishable to GAE ([0979599](https://github.com/groton-school/lti/commit/09795996a75e784c34696c897fe9f1a22d3f094b))
* **slim-lti-skeleton:** use Firestore-backed HTTP Basic authenticator ([458063b](https://github.com/groton-school/lti/commit/458063b828e97e5a21d0130b1e0f03b7f419a8fc))
* **slim-lti-skeleton:** use slim-skeleton@4.5.0 base ([a738f68](https://github.com/groton-school/lti/commit/a738f68fce112bd7f09fea1737f9c7abee158e4f))
* **slim-lti-skeleton:** use slim-skeleton@4.5.0 base ([bece018](https://github.com/groton-school/lti/commit/bece018e67c47c118d6afa8e9852ea359d2af8aa))


### Bug Fixes

* attempt partitioned secure cookies ([878ece9](https://github.com/groton-school/lti/commit/878ece9f4c6b4e675bd8afe16bd378de2932902f))
* **firestore-http-basic-authenticator:** valid COLLECTON_PATH ([a23338e](https://github.com/groton-school/lti/commit/a23338e1644cdf65aa3aaf7174cbd3fa4d8b56f1))
* **slim-lti-gae-shim:** correct slim-lti-shim dependency ([6ec23f6](https://github.com/groton-school/lti/commit/6ec23f668faa1dec2625db2519de479076d66c75))
* **slim-lti-gae-shim:** FirestoreRegistration namespace ([bb39e75](https://github.com/groton-school/lti/commit/bb39e7561949096ac688b62d92de09ff24b0300f))
* **slim-lti-infrastructure-gae:** downgrade JsonSerializable to array ([9dcf911](https://github.com/groton-school/lti/commit/9dcf911041eba9bdad1ace15ac88c62a8f35bc11))
* **slim-lti-infrastructure-gae:** fix broken psr-4 autoload namespace ([fc7bfbb](https://github.com/groton-school/lti/commit/fc7bfbb47ec3e71bba475423037e51244b381606))
* **slim-lti-infrastructure-gae:** over-zealous types ([26ef1df](https://github.com/groton-school/lti/commit/26ef1df8c8f55ad07dd800350091ed66ce063eac))
* **slim-lti-infrastructure-gae:** stabilize dependencies ([73e9e8c](https://github.com/groton-school/lti/commit/73e9e8c8e8396333a441dad43c3cd59bdec3154e))
* **slim-lti-shim:** actually apply options to Cookie if passed ([56080c5](https://github.com/groton-school/lti/commit/56080c5469ba62a76ab30abba2a3445c2dac3339))
* **slim-lti-shim:** attempt SameSite=Strict registration cookie ([df29816](https://github.com/groton-school/lti/commit/df2981605ea39003decf78eada91c695d646fef3))
* **slim-lti-shim:** break circular dependency in registration actions ([3d316dd](https://github.com/groton-school/lti/commit/3d316dd6e0a6a1bd43c9075094904bb27ae7cf5a))
* **slim-lti-shim:** correctly get cookie value ([c1781b0](https://github.com/groton-school/lti/commit/c1781b0c6c80afc3e5cc6dc94bb57b342ff830bb))
* **slim-lti-shim:** do not overwite psr-7 response ([3459403](https://github.com/groton-school/lti/commit/3459403c96f910df4a9af0b1ff7d9d996eb4bf62))
* **slim-lti-shim:** downgrade from JsonSerializable to array (over-eager) ([89e69db](https://github.com/groton-school/lti/commit/89e69dbc7c5e02957fc7c79fc5c6f23cb918950f))
* **slim-lti-shim:** export SettingsInferface, internalize Action ([0bb7901](https://github.com/groton-school/lti/commit/0bb790112d2ca6c3052503333ee3d0f024040d09))
* **slim-lti-shim:** include response on configure() invocation ([5faffeb](https://github.com/groton-school/lti/commit/5faffeb83986bfdcdbca48ff3fbfb0ebc8861616))
* **slim-lti-shim:** more specific error message on RegistrationConfigurePassthruAction::action() ([d647c75](https://github.com/groton-school/lti/commit/d647c7576c88ae5bfaf80143e45a603efa2d1e09))
* **slim-lti-shim:** reattempt in-browser redirect ([ac47179](https://github.com/groton-school/lti/commit/ac47179c23086f78868b9fb7ed148faad3b7be99))
* **slim-lti-shim:** stabilize dependencies ([cf0be59](https://github.com/groton-school/lti/commit/cf0be598a879080836d65d66176b1b130bc18204))
* **slim-lti-shim:** third party cookies are the devil ([65a5300](https://github.com/groton-school/lti/commit/65a53005d8871d7e01a5eb12f155fb366ea4411a))
* **slim-lti-shim:** wrong language string concat ([615d6a4](https://github.com/groton-school/lti/commit/615d6a42c642523a32328b20e439c961c8a9613b))
* typo in split.yml ([cb90da2](https://github.com/groton-school/lti/commit/cb90da271debdc8795ab4e47636fba4a2e5a8911))
