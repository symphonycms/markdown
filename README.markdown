# Markdown #

This extension provides Markdown formatting for fields.
It is part of the Symphony core download package.

- Version: 1.10
- Date: 17th March 2010
- Requirements: Symphony 2.0.7+
- Author: Alistair Kearney, alistair@symphony-cms.com
- Constributors: [A list of contributors can be found in the commit history](http://github.com/pointybeard/markdown/commits/master)
- GitHub Repository: <http://github.com/pointybeard/markdown>

## Synopsis

Format text using [Markdown](http://daringfireball.net/projects/markdown/) syntax. This release also passes any output through the [HTML Purifier](http://htmlpurifier.org/) library.

## Installation & Updating

As of 1.10, the formatters have been renamed and the "markdown" & "markdown extra" formatters combined into a single formatter. Fields that used a previous version will appear to have no formatter specified and as such, will require the formatter to be set.

Information about [installing and updating extensions](http://symphony-cms.com/learn/tasks/view/install-an-extension/) can be found in the Symphony documentation at <http://symphony-cms.com/learn/>.


## Change Log

**Version 1.10**

- Using updated PHP Markdown library. v1.2.4
- Added [HTML Purifier](http://htmlpurifier.org/) v4.0.0 to help prevent XSS and other attacks on input

