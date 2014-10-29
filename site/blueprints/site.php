<?php if(!defined('KIRBY')) exit ?>

title: Site
pages:
  template:
    - _section
fields:
  title:
    label: Title
    type: text
  slogan:
    label: Slogan
    type: text
  copyright:
    label: Copyright
    type: textarea
  line-a:
    type: line
  info-contact:
    label: Contact Information
    type: info
  phone:
    label: Phone Number
    type: tel
    width: 1/2
  email:
    label: E-mail
    type: email
    width: 1/2
    validate: email
    help: Enter an e-mail address
  line-b:
    type: line
  info-meta:
    label: META Tags
    type: info
  meta_author:
    label: Author
    type: text
  meta_description:
    label: Description
    type: textarea
  meta_keywords:
    label: Keywords
    type: tags
  meta_keywords:
    label: Keywords
    type: text