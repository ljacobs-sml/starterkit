<?php if(!defined('KIRBY')) exit ?>

title: Section (Grid)
pages:
  template:
    - _section_row
    - _section_column
files: false
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
      table:  Table
    default: normal