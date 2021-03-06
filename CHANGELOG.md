# Changelog

All Notable changes to *jkphl/rdfa-lite-microdata* will be documented in this file. The format is based on [Keep a Changelog](http://keepachangelog.com/). This project adheres to [Semantic Versioning](http://semver.org/).

## [0.4.4] - 2017-10-15

### Changed

* Added `content` attribute support according to [new spec](https://www.w3.org/TR/microdata/#values) ([#2](https://github.com/jkphl/rdfa-lite-microdata/issues/2))

## [0.4.3] - 2017-06-14

### Changed

* Updated fault dom-factory dependency

## [0.4.2] - 2017-05-29

### Fixed

* Fixed faulty node hashing scheme

## [0.4.1] - 2017-05-29

### Changed

* Made the HTML Microdata parser ignore invalid properties
* Removed the HTML parsing error handler argument

## [0.4.0] - 2017-04-24

### Changed

* Released the Microdata property name constraints
* Swapped in the [dom-factory](https://github.com/jkphl/dom-factory) HTML5/XML parser

### Removed

* Custom HTML parser error handling

## [0.3.1] - 2017-03-24

### Added

* Dedicated exception for HTML parsing errors
* Added custom HTML parsing error handling ([#4](https://github.com/jkphl/rdfa-lite-microdata/issues/4))

## [0.3.0] - 2017-03-17

### Added

* Support for enhanced property lists and property names
* IRI mode (IRI based item types and property names)

## [0.2.1] - 2017-03-11

### Fixed

* Fixed property cache bug

### Changed

* Prefixed HTML Microdata property names with schema.org vocabulary URI (consistency with RDFa Lite 1.1 parsing results)

## [0.2.0] - 2017-03-03

### Added

* Support for HTML5 documents
* Support for DOMDocument parsing

## [0.1.0] - 2017-02-20

Initial release
