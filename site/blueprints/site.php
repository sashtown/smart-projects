<?php if(!defined('KIRBY')) exit ?>

# main site blueprint

title: Site
pages: default

fields:
  title:
    label: Title
    type:  text
  author:
    label: Author
    type:  text
  description:
    label: Description
    type:  textarea
  hello: 
    label: Welcome Message
    type: textarea
  phone:
    label: Phone Number
    type: tel
    width: 1/2
  email:
    label: Email
    type: email
    width: 1/2
  keywords:
    label: Keywords
    type:  tags
  copyright:
    label: Copyright
    type:  textarea