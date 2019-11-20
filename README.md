# Markteing Blocks Demo

A small demo to get started with Gutenberg block development.

## Installation & Development

First, you need a WordPress Environment to run the plugin on.

The quickest way to get up and running is to use the provided docker setup. Install [docker-ce](https://store.docker.com/search?type=edition&offering=community) and [docker-compose](https://docs.docker.com/compose/install/) by following the most recent instructions on the docker site.

In the folder of your preference, clone this project and enter the working directory:

```
git clone git@github.com:danielwrobert/gutenberg-blocks-demo.git
cd gutenberg-blocks-demo
```

To bring up this local WordPress instance run:

```
docker-compose up -d
```

The WordPress should be available at http://localhost:9999

To stop this local WordPress instance later run:

```
docker-compose stop
```

Alternatively, you can look into solutions like [Laravel Valet](https://laravel.com/docs/5.6/valet#valet-or-homestead), [VVV](https://varyingvagrantvagrants.org/),[MAMP](https://www.mamp.info/en/), or [Local by Flywheel](https://localbyflywheel.com/).

_NOTE: If you set up you environment with one of the alternative approaches (not Docker), you will need to clone this project in the Plugins directory and enter the repo directory:_

```
cd wp-content/plugins
git clone git@github.com:danielwrobert/gutenberg-blocks-demo.git
cd gutenberg-blocks-demo
```

Once you have your everything installed and running, the following commands are required to build the plugins:

To install the node packages
```
npm install
```

To build the production version of the plugin
```
npm run build
```

To build a development version
```
npm start
```

<br/><br/><p align="center"><img src="https://s.w.org/style/images/codeispoetry.png?1" alt="Code is Poetry." /></p>