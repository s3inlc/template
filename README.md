# Templating

Simple Templating System written for PHP

It supports loops and if statements, function calls and includes of other templates. Please look at the examples or explanations below for using templating functions.

## Getting Started

To set up the templating, if you use Github you can just setup it as submodule. Otherwise clone the repository to the path you want to.

You need to update some values in ```init.php``` to set the correct templating path.

# Functions

## Variables

You can print values of variables with brackets: ```[[valName]]```

## Loops

There are two types of loops, foreach and for loops:

```
{{FOREACH entry;[[entries]]}}
  [[entry]]
{{ENDFOREACH}}
```

```
{{FOR counter;0;[[to]]}}
  [[counter]]
{{ENDFOR}}
```

## Includes

Other templates can be included (Template name WITHOUT the extension .template.html):

```
{%TEMPLATE->path/to/template%}
```




