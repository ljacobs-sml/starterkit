<?php if(!defined('KIRBY')) exit ?>

title: Section (row)
pages:
  template:
    - _section_column
files: true
fields:
  title:
    label: Title
    type:  text
  span:
    label: Span
    type:  select
    options:
      normal: Normal
      full:   Full Width
    default: normal