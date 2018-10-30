<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_EMAIL_INFORMATION' => 'EMAIL',
    'LBL_FW' => 'FW:',
    'LBL_RE' => 'RE:',

    'LBL_BUTTON_CREATE' => 'Create',
    'LBL_BUTTON_EDIT' => 'Edit',
    'LBL_BUTTON_EDIT_EDIT_DRAFT' => 'Edit Draft',
    'LBL_QS_DISABLED' => '(QuickSearch is not available for this module. Please use the select button.)',
    'LBL_SIGNATURE_PREPEND' => 'Signature above reply',
    'LBL_IMPORT' => 'Import',
    'LBL_LOADING' => 'Loading',
    'LBL_MARKING' => 'Marking',

    'LBL_CONFIRM_DELETE_EMAIL' => 'Are you sure you want to delete this email?',
    'LBL_ENTER_FOLDER_NAME' => 'Please enter a folder name',

    'LBL_ERROR_SELECT_MODULE' => 'Please select a module for the Related to field',

    'ERR_ARCHIVE_EMAIL' => 'Error: Select emails to archive.',
    'ERR_DELETE_RECORD' => 'Error: You must specify a record number to delete the account.',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Accounts',
    'LBL_ADD_DASHLETS' => 'Add SuiteCRM Dashlets',
    'LBL_ADD_DOCUMENT' => 'Add Documents',
    'LBL_ADD_ENTRIES' => 'Add Entries',
    'LBL_ADD_FILE' => 'Add Files',
    'LBL_ATTACHMENTS' => 'Attachments:',
    'LBL_ATTACH_FILES' => 'Attach Files',
    'LBL_ATTACH_DOCUMENTS' => 'Attach Documents',
    'LBL_HAS_ATTACHMENT' => 'Has Attachment?:',
    'LBL_BCC' => 'Bcc:',
    'LBL_BODY' => 'Body:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
    'LBL_CC' => 'Cc:',
    'LBL_COMPOSE_MODULE_NAME' => 'Compose Email',
    'LBL_CONTACT_NAME' => 'Contact:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_CREATED_BY' => 'Created by',
    'LBL_DATE_SENT' => 'Date Sent:',
    'LBL_DATE' => 'Date Sent:',
    'LBL_DELETE_FROM_SERVER' => 'Delete message from server',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_EDIT_ALT_TEXT' => 'Edit Plain Text',
    'LBL_SEND_IN_PLAIN_TEXT' => 'Send in Plain Text',
    'LBL_SEND_CONFIRM_OPT_IN' => 'Send Opt In Email',
    'LBL_EMAIL_ATTACHMENT' => 'Email Attachment',
    'LBL_EMAIL_SELECTOR_SELECT' => 'Select',
    'LBL_EMAIL_SELECTOR_CLEAR' => 'Clear',
    'LBL_EMAIL' => 'Email Address:',
    'LBL_EMAILS_ACCOUNTS_REL' => 'Emails:Accounts',
    'LBL_EMAILS_BUGS_REL' => 'Emails:Bugs',
    'LBL_EMAILS_CASES_REL' => 'Emails:Cases',
    'LBL_EMAILS_CONTACTS_REL' => 'Emails:Contacts',
    'LBL_EMAILS_LEADS_REL' => 'Emails:Leads',
    'LBL_EMAILS_OPPORTUNITIES_REL' => 'Emails:Opportunities',
    'LBL_EMAILS_NOTES_REL' => 'Emails:Notes',
    'LBL_EMAILS_PROJECT_REL' => 'Emails:Project',
    'LBL_EMAILS_PROJECT_TASK_REL' => 'Emails:ProjectTask',
    'LBL_EMAILS_PROSPECT_REL' => 'Emails:Prospect',
    'LBL_EMAILS_CONTRACTS_REL' => 'Emails:Contract',
    'LBL_EMAILS_TASKS_REL' => 'Emails:Tasks',
    'LBL_EMAILS_USERS_REL' => 'Emails:Users',
    'LBL_EMPTY_FOLDER' => 'No Emails to display',
    'LBL_SELECT_FOLDER' => 'Select Folder',
    'LBL_ERROR_SENDING_EMAIL' => 'Error Sending email',
    'LBL_ERROR_SAVING_DRAFT' => 'Error Saving Draft',
    'LBL_FROM_NAME' => 'From Name',
    'LBL_FROM' => 'From:',
    'LBL_REPLY_TO' => 'Reply To:',
    'LBL_HTML_BODY' => 'HTML Body',
    'LBL_INVITEE' => 'Recipients',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
    'LBL_MESSAGE_SENT' => 'Message Sent',
    'LBL_MODIFIED_BY' => 'Modified By',
    'LBL_MODULE_NAME' => 'All Emails',
    'LBL_MODULE_TITLE' => 'Emails: ',
    'LBL_MY_EMAILS' => 'Emails',
    'LBL_NEW_FORM_TITLE' => 'Archive Email',
    'LBL_NONE' => 'None',
    'LBL_NOT_SENT' => 'Send Error',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Attachments',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Opportunities',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projects',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Project Tasks',
    'LBL_RAW' => 'Raw Email',
    'LBL_SAVE_AS_DRAFT_BUTTON_TITLE' => 'Save Draft',
    'LBL_DISREGARD_DRAFT_BUTTON_TITLE' => 'Disregard Draft',
    'LBL_SEARCH_FORM_TITLE' => 'Email Search',
    'LBL_SEND_ANYWAYS' => 'This email has no subject. Send/save anyway?',
    'LBL_SEND_BUTTON_LABEL' => 'Send',
    'LBL_SEND_BUTTON_TITLE' => 'Send',
    'LBL_SEND' => 'SEND',
    'LBL_SENT_MODULE_NAME' => 'Sent Emails',
    'LBL_SHOW_ALT_TEXT' => 'Show Plain Text',
    'LBL_SIGNATURE' => 'Signature',
    'LBL_SUBJECT' => 'Subject:',
    'LBL_TEXT_BODY' => 'Text Body',
    'LBL_TIME' => 'Time Sent:',
    'LBL_TO_ADDRS' => 'To',
    'LBL_USERS_SUBPANEL_TITLE' => 'Users',
    'LBL_USERS' => 'Users',

    'LNK_CALL_LIST' => 'Calls',
    'LBL_EMAIL_RELATE' => 'Related To',
    'LNK_EMAIL_TEMPLATE_LIST' => 'View Email Templates',
    'LNK_MEETING_LIST' => 'Meetings',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_EMAIL_TEMPLATE' => 'Create Email Template',
    'LNK_NEW_EMAIL' => 'Send Email',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_NOTE' => 'Create Note or Attachment',
    'LNK_NEW_SEND_EMAIL' => 'Compose',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_NOTE_LIST' => 'Notes',
    'LNK_SENT_EMAIL_LIST' => 'Sent Emails',
    'LNK_TASK_LIST' => 'Tasks',
    'LNK_VIEW_CALENDAR' => 'Today',

    'LBL_LIST_ASSIGNED' => 'Assigned',
    'LBL_LIST_CONTACT_NAME' => 'Contact Name',
    'LBL_LIST_DATE_SENT' => 'Date Sent',
    'LBL_LIST_DATE' => 'Date Sent',
    'LBL_LIST_FORM_DRAFTS_TITLE' => 'Draft',
    'LBL_LIST_FORM_SENT_TITLE' => 'Sent Emails',
    'LBL_LIST_FORM_TITLE' => 'Email List',
    'LBL_LIST_FROM_ADDR' => 'From',
    'LBL_LIST_RELATED_TO' => 'Recipient Type',
    'LBL_LIST_SUBJECT' => 'Subject',
    'LBL_LIST_TO_ADDR' => 'To',
    'LBL_LIST_TYPE' => 'Type',

    'WARNING_SETTINGS_NOT_CONF' => 'Warning: Your email settings are not configured to send email.',

    // for All emails
    'LBL_BUTTON_RAW_LABEL' => 'Show Raw',
    'LBL_BUTTON_RAW_LABEL_HIDE' => 'Hide Raw',

    // for InboundEmail
    'LBL_BUTTON_CHECK' => 'Check Mail',
    'LBL_BUTTON_CHECK_TITLE' => 'Check For New Email',
    'LBL_BUTTON_FORWARD' => 'Forward',
    'LBL_BUTTON_REPLY_TITLE' => 'Reply',
    'LBL_BUTTON_REPLY_ALL' => 'Reply All',
    'LBL_CASES_SUBPANEL_TITLE' => 'Cases',
    'LBL_INBOUND_TITLE' => 'Inbound Email',
    'LBL_INTENT' => 'Intent',
    'LBL_MESSAGE_ID' => 'Message ID',
    'LBL_REPLY_HEADER_1' => 'On ',
    'LBL_REPLY_HEADER_2' => 'wrote:',
    'LBL_REPLY_TO_ADDRESS' => 'Reply-to Address',
    'LBL_REPLY_TO_NAME' => 'Reply-to Name',

    'LBL_LIST_BUG' => 'Bugs',
    'LBL_LIST_CASE' => 'Cases',
    'LBL_LIST_CONTACT' => 'Contacts',
    'LBL_LIST_LEAD' => 'Leads',
    'LBL_LIST_TASK' => 'Tasks',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Assigned User',

    // for Inbox
    'LBL_ALL' => 'All',
    'LBL_ASSIGN_WARN' => 'Ensure that all 2 options are selected.',
    'LBL_BACK_TO_GROUP' => 'Back to Group Inbox',
    'LBL_BUTTON_DISTRIBUTE_TITLE' => 'Assign',
    'LBL_BUTTON_DISTRIBUTE' => 'Assign',
    'LBL_BUTTON_GRAB_TITLE' => 'Take from Group',
    'LBL_BUTTON_GRAB' => 'Take from Group',
    'LBL_CREATE_BUG' => 'Create Bug',
    'LBL_CREATE_CASE' => 'Create Case',
    'LBL_CREATE_CONTACT' => 'Create Contact',
    'LBL_CREATE_LEAD' => 'Create Lead',
    'LBL_CREATE_TASK' => 'Create Task',
    'LBL_DIST_TITLE' => 'Assignment',
    'LBL_LOCK_FAIL_DESC' => 'The chosen item is unavailable currently.',
    'LBL_LOCK_FAIL_USER' => ' has taken ownership.',
    'LBL_MASS_DELETE_ERROR' => 'No checked items were passed for deletion.',
    'LBL_NEW' => 'New',
    'LBL_NEXT_EMAIL' => 'Next Free Item',
    'LBL_REPLIED' => 'Replied',
    'LBL_TO' => 'To: ',
    'LBL_TOGGLE_ALL' => 'Toggle All',
    'LBL_UNKNOWN' => 'Unknown',
    'LBL_USE' => 'Assign:',
    'LBL_ASSIGN_SELECTED_RESULTS_TO' => 'Assign Selected Results To: ',
    'LBL_USER_SELECT' => 'Select Users',
    'LBL_USING_RULES' => 'Using Rules:',
    'LBL_WARN_NO_DIST' => 'No Distribution Method Selected',
    'LBL_WARN_NO_USERS' => 'No Users are selected',
    'LBL_IMPORT_STATUS_TITLE' => 'Status',
    'LBL_INDICATOR' => 'Indicator',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE_GROUP_INBOX' => 'Group Inbox',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Drafts',
    'LBL_LIST_TITLE_MY_INBOX' => 'Inbox',
    'LBL_LIST_TITLE_MY_SENT' => 'Sent Email',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'Archived Emails',

    'LNK_MY_DRAFTS' => 'Drafts',
    'LNK_MY_INBOX' => 'Email',
    'LNK_VIEW_MY_INBOX' => 'View Email',
    'LNK_QUICK_REPLY' => 'Reply',
    'LBL_EMAILS_NO_PRIMARY_TEAM_SPECIFIED' => 'No Primary Team specified',
    'LBL_INSERT_CONTACT_EMAIL' => 'Insert Email Address from a Contact',
    'LBL_INSERT_ACCOUNT_EMAIL' => 'Insert Email Address from an Account',
    'LBL_INSERT_TARGET_EMAIL' => 'Insert Email Address from a Target',
    'LBL_INSERT_USER_EMAIL' => 'Insert Email Address from an User',
    'LBL_INSERT_LEAD_EMAIL' => 'Insert Email Address from a Lead',
    'LBL_INSERT_ERROR_BLANK_EMAIL' => 'Invalid email address',

    // advanced search
    'LBL_ASSIGNED_TO' => 'Assigned To:',
    'LBL_MEMBER_OF' => 'Parent',
    'LBL_QUICK_CREATE' => 'Quick Create',
    'LBL_CREATE' => 'Create',
    'LBL_STATUS' => 'Email Status:',
    'LBL_EMAIL_FLAGGED' => 'Flagged:',
    'LBL_EMAIL_REPLY_TO_STATUS' => 'Reply To Status:',
    'LBL_TYPE' => 'Type:',
    //#20680 EmialTemplate Ext.Message.show;
    'LBL_EMAILTEMPLATE_MESSAGE_SHOW_TITLE' => 'Please check!',
    'LBL_EMAILTEMPLATE_MESSAGE_SHOW_MSG' => 'Selecting this template will overwrite any data already entered within the email body. Do you wish to continue?',
    'LBL_EMAILTEMPLATE_MESSAGE_CLEAR_MSG' => 'Selecting "--None--" will clear any data already entered within the email body. Do you wish to continue?',
    'LBL_EMAILTEMPLATE_MESSAGE_WARNING_TITLE' => 'Warning',
    'LBL_EMAILTEMPLATE_MESSAGE_MULTIPLE_RECIPIENTS' => 'Using an email template containing contact variables, such as the contact name, to send emails to multiple recipients may have unexpected results. It is recommended that you use an email campaign for mass mailings.',
    'LBL_CHECK_ATTACHMENTS' => 'Please Check Attachments!',
    'LBL_HAS_ATTACHMENTS' => 'This email already has attachment(s). Would you like to keep the attachment(s)?',
    'LBL_HAS_ATTACHMENT_INDICATOR' => 'Has Attachments',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Missing required field',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Invalid required field',
    'LBL_FILTER_BY_RELATED_BEAN' => 'Only show recipients related to',
    'LBL_ADD_INBOUND_ACCOUNT' => 'Add',
    'LBL_ADD_OUTBOUND_ACCOUNT' => 'Add',
    'LBL_EMAIL_ACCOUNTS_INBOUND' => 'Mail Account Properties',
    'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNT' => 'Outgoing SMTP Mail Server',
    'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNTS' => 'Outgoing SMTP Mail Servers',
    'LBL_EMAIL_SETTINGS_INBOUND_ACCOUNTS' => 'Mail Accounts',
    'LBL_EMAIL_SETTINGS_INBOUND' => 'Incoming Email',
    'LBL_EMAIL_SETTINGS_OUTBOUND' => 'Outgoing Email',
    'LBL_ADD_CC' => 'Add Cc',
    'LBL_ADD_BCC' => 'Add Bcc',
    'LBL_MOVE_TO_BCC' => 'Move To Bcc',
    'LBL_ADD_TO_ADDR' => 'Add To',
    'LBL_SELECTED_ADDR' => 'Selected',
    'LBL_ADD_CC_BCC_SEP' => '|',
    'LBL_SEND_EMAIL_FAIL_TITLE' => 'Error Sending Email',
    'LBL_EMAIL_DETAIL_VIEW_SHOW' => 'show ',
    'LBL_EMAIL_DETAIL_VIEW_MORE' => ' more',
    'LBL_MORE_OPTIONS' => 'More',
    'LBL_LESS_OPTIONS' => 'Less',
    'LBL_MAILBOX_TYPE_PERSONAL' => 'Personal',
    'LBL_MAILBOX_TYPE_GROUP' => 'Group',
    'LBL_MAILBOX_TYPE_GROUP_FOLDER' => 'Group - Auto-Import',
    'LBL_SEARCH_FOR' => 'Search For',
    'LBL_EMAIL_INBOUND_TYPE_HELP' => '<b>Personal</b>: Email account accessible by you. Only you can manage and import emails from this account.<br><b>Group</b>: Email account accessible by members of specified teams. Team members can manage and import emails from this account.<br><b>Group - auto-import</b>: Email account accessible by members of specified teams. Emails are automatically imported as records.',
    'LBL_ADDRESS_BOOK_SEARCH_HELP' => 'Enter an email address, First Name, Last Name or Account Name to find recipients.',
    'LBL_TEST_SETTINGS' => 'Test Settings',
    'LBL_EMPTY_EMAIL_BODY' => '<p><span style="color: #888888;"><em>This Message Has No Content</em></span></p>',
    'LBL_HAS_EMPTY_EMAIL_SUBJECT' => 'Please specify the subject',
    'LBL_HAS_EMPTY_EMAIL_BODY' => 'Please specify your message in the body',
    'LBL_HAS_INVALID_EMAIL_CC' => 'The address(es) in the Cc field are invalid',
    'LBL_HAS_INVALID_EMAIL_BCC' => 'The address(es) in the Bcc field are invalid',
    'LBL_HAS_INVALID_EMAIL_TO' => 'The address(es) in the To field are invalid',
    'LBL_TEST_EMAIL_SUBJECT' => 'Test Email from SuiteCRM',
    'LBL_NO_SUBJECT' => '(no subject)',
    'LBL_CHECKING_ACCOUNT' => 'Checking Account',
    'LBL_OF' => 'of',
    'LBL_TEST_EMAIL_BODY' => 'This email was sent in order to test the outgoing mail server information provided in the SuiteCRM application. A successful receipt of this email indicates that the outgoing mail server information provided is valid.',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'The administrator has not yet configured the default outbound account. Unable to send test email.',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Use SMTP Authentication?',
    'LBL_MAIL_SMTPPASS' => 'SMTP Password:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP Server:',
    'LBL_MAIL_SMTPUSER' => 'SMTP Username:',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Server Specification',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Choose your Email provider:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Password:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Password:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail Email Address:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange Password:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange Username:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server Port:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server:',

    'LBL_EDIT_LAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    'LBL_ATTACHMENT' => 'Attachment' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Delete' /*for 508 compliance fix*/,
    'LBL_CREATE_CASES' => 'Create Cases' /*for 508 compliance fix*/,
    'LBL_CREATE_LEADS' => 'Create Leads' /*for 508 compliance fix*/,
    'LBL_CREATE_CONTACTS' => 'Create Contacts' /*for 508 compliance fix*/,
    'LBL_CREATE_BUGS' => 'Create Bugs' /*for 508 compliance fix*/,
    'LBL_CREATE_TASKS' => 'Create Tasks' /*for 508 compliance fix*/,
    'LBL_CHECK_INLINE' => 'Correct' /*for 508 compliance fix*/,
    'LBL_CLOSE' => 'Close' /*for 508 compliance fix*/,
    'LBL_HELP' => 'Help' /*for 508 compliance fix*/,
    'LBL_WAIT' => 'Wait' /*for 508 compliance fix*/,
    'LBL_CHECKEMAIL' => 'Check Email' /*for 508 compliance fix*/,
    'LBL_COMPOSEEMAIL' => 'Compose Email' /*for 508 compliance fix*/,
    'LBL_EMAILSETTINGS' => 'Email Settings' /*for 508 compliance fix*/,

    // SNIP
    'LBL_EMAILS_MEETINGS_REL' => 'Emails:Meetings',
    'LBL_DATE_MODIFIED' => 'Date Modified',

    'LBL_CATEGORY' => 'Category',
    'LBL_LIST_CATEGORY' => 'Category',
    'LBL_EMAIL_TEMPLATE' => 'Email Template',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Disregard draft',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'This operation will delete this email, do you want to continue?',
    'LBL_EMAIL_DRAFT_DELETED' => 'Draft has been deleted',
    'LBL_EMAIL_DRAFT_ERROR_DELETING' => 'An error has occurred while trying to delete draft.',

    'LBL_QUICK_CREATE_SUCCESS1' => 'The record has been successfully created.',
    'LBL_QUICK_CREATE_SUCCESS2' => 'Click OK to view the new record.',
    'LBL_QUICK_CREATE_SUCCESS3' => 'Click Cancel to return to the Email.',

    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Apply an Email Template',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'This operation will override the email Body and Subject fields, do you want to continue?',

    'LBL_MAILBOX_ID' => 'Mailbox ID',
    'LBL_PARENT_ID' => 'Parent ID',
    'LBL_LAST_SYNCED' => 'Last Synchronised',
    'LBL_ORPHANED' => 'Orphaned',
    'LBL_IMAP_KEYWORDS' => 'IMAP Keywords',
    'LBL_ERROR_NO_FOLDERS' => 'Error: There are no folders available. Please check your email settings.',
    'LBL_ORIGINAL_MESSAGE_SEPERATOR' => '---',


    'LBL_MARK_UNREAD' => 'Mark As Unread',
    'LBL_MARK_READ' => 'Mark As Read',
    'LBL_MARK_FLAGGED' => 'Mark As Flagged',
    'LBL_MARK_UNFLAGGED' => 'Mark As Unflagged',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'Opt In Email Sent',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Opt In Email Failed',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'Confirm Opt In Token',

    'ERR_NO_RETURN_ID' => 'Attachment not found.',

    'LBL_LIST_DATE_MODIFIED' => 'Last Modified',
    'LNK_IMPORT_CAMPAIGNS' => 'Import Campaign',
);

