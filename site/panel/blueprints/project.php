<?php if(!defined('KIRBY')) exit ?>

# project blueprint

title: Project
pages: false

fields:
   title: 
      label: Project
      type: text
      required: true
   date:
      label: Entry date
      type: date
      required: true
   client:
      label: Client / Owner
      type: text
      required: true
   person:
      label: Contact Person
      type: text
      required: true
   client_email:
      label: Client / Owner email
      type: text
      required: true
   client_id:
      label: Client ID
      type: text
      required: true
   website:
      label: Website
      type: text
      validate:url

   cms:
      label: CMS
      type: text
   cms_url:
      label: CMS Page
      type: text
   cms_login:
      label: CMS Login
      type: text
   cms_password:
      label: CMS Password
      type: text

   stats:
      label: Stats Provider
      type: text
   stats_url:
      label: Stats URL
      type: text
   stats_login:
      label: Stats Login
      type: text
   stats_password:
      label: Stats Password
      type: text

   webhosting_provider:
      label: Webhosting Provider
      type: text
   webhosting_service:
      label: Service
      type: text
   webhosting_domains:
      label: Domain(s)
      type: text
   webhosting_admin:
      label: Admin URL
      type: text
   webhosting_login:
      label: Webhosting Login
      type: text
   webhosting_password:
      label: Webhosting Password
      type: text

   ftp_server:
      label: FTP-Server
      type: text
   ftp_login:
      label: FTP-Login
      type: text
   ftp_password:
      label: FTP-Password
      type: text

   database_url:
      label: Database URL
      type: text
   database_login:
      label: Database Login
      type: text
   database_password:
      label: Database Password
      type: text

   mailbox_url:
      label: Mailbox URL
      type: text
   mailbox_login:
      label: Mailbox Login
      type: text
   mailbox_password:
      label: Mailbox Password
      type: text

   network1:
      label: Network 1
      type: text
   network1_url:
      label: Network 1 URL
      type: text
   network1_login:
      label: Network 1 Login
      type: text
   network1_password:
      label: Network 1 Passwort
      type: text		

   network2:
      label: Network 2
      type: text
   network2_url:
      label: Network 2 URL
      type: text
   network2_login:
      label: Network 2 Login
      type: text
   network2_password:
      label: Network 2 Passwort
      type: text

   network3:
      label: Network 3
      type: text
   network3_url:
      label: Network 3 URL
      type: text
   network3_login:
      label: Network 3 Login
      type: text
   network3_password:
      label: Network 3 Passwort
      type: text