<?php if(!defined('KIRBY')) exit ?>

title: Hero
pages: false
fields:
  title:
    label: Title
    type:  text
  copy:
    label: Content
    type:  textarea
    size:  large
  layout:
    label: Layouts
    type:  select
    options:
      layout-a: Layout A (no preset style)
      layout-b: Layout B
      layout-c: Layout C
      layout-d: Layout D
      layout-e: Layout E
      layout-f: Layout F
    default: layout-a