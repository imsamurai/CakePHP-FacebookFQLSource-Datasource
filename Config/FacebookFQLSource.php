<?php

/**
 * Author: imsamurai <im.samuray@gmail.com>
 * Date: 12.07.2013
 * Time: 16:25:00
 * Format: https://github.com/imsamurai/cakephp-httpsource-datasource
 */
$config['FacebookFQLSource']['config_version'] = 2;

$CF = HttpSourceConfigFactory::instance('FacebookFQLSource.FacebookFQLSourceConfigFactory');
$Config = $CF->config();

$Config
		/*
		 * An album of photos or videos as represented in FQL.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/album
		 */
		->add(
				$CF->endpoint()
				->id(1)
				->methodRead()
				->table('album')
		)
		/*
		 * An FQL table that represents user roles for applications in the App Dashboard.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/app_role
		 */
		->add(
				$CF->endpoint()
				->id(2)
				->methodRead()
				->table('app_role')
		)
		/*
		 * An application as represented in FQL.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/application
		 */
		->add(
				$CF->endpoint()
				->id(3)
				->methodRead()
				->table('application')
		)
		/*
		 * An FQL table containing the requests sent via an app to a user.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/apprequest
		 */
		->add(
				$CF->endpoint()
				->id(4)
				->methodRead()
				->table('apprequest')
		)
		/*
		 * An FQL table that returns information about a checkin to a place.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/checkin
		 */
		->add(
				$CF->endpoint()
				->id(5)
				->methodRead()
				->table('checkin')
		)
		/*
		 * An FQL table that documents columns in other FQL tables
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/column
		 */
		->add(
				$CF->endpoint()
				->id(6)
				->methodRead()
				->table('column')
		)
		/*
		 * Comments associated with one or more fb:comments as represented in FQL.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/comment
		 */
		->add(
				$CF->endpoint()
				->id(7)
				->methodRead()
				->table('comment')
		)
		/*
		 * Comments ID information for a given application ID as represented in FQL.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/comments_info
		 */
		->add(
				$CF->endpoint()
				->id(8)
				->methodRead()
				->table('comments_info')
		)
		/*
		 * A user connection, friend of Facebook Page, as represented in FQL.
		 * These connections represent all the entities whose streams the specified
		 * user can consume. This table is primarily relevant for reconstructing
		 * the user's News Feed
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/connection
		 */
		->add(
				$CF->endpoint()
				->id(9)
				->methodRead()
				->table('connection')
		)
		/*
		 * A list of cookies that were set for the user as represented in FQL.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/cookies
		 */
		->add(
				$CF->endpoint()
				->id(10)
				->methodRead()
				->table('cookies')
		)
		/*
		 * An FQL table that represents user roles for applications in the App Dashboard. Use app_role instead.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/developer
		 */
		->add(
				$CF->endpoint()
				->id(11)
				->methodRead()
				->table('developer')
		)
		/*
		 * The domain table provides a read-only mapping between domain names and the Facebook-generated
		 * IDs associated with them. This table is analogous to the Domain object in the Graph API.
		 * Query this table to get domain IDs for which to query domain metrics from the insights FQL table.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/domain
		 */
		->add(
				$CF->endpoint()
				->id(12)
				->methodRead()
				->table('domain')
		)
		/*
		 * The domain_admin table provides a read-only lookup of all Facebook-generated IDs claimed by a given user ID.
		 * Query this table to get domain IDs for which to query domain metrics from the insights FQL table.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/domain_admin
		 */
		->add(
				$CF->endpoint()
				->id(13)
				->methodRead()
				->table('domain_admin')
		)
		/*
		 * An FQL table that returns information about an event.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/event
		 */
		->add(
				$CF->endpoint()
				->id(14)
				->methodRead()
				->table('event')
		)
		/*
		 * Contains the list of attendees for an event in FQL and can be queried by user or by event.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/event_member
		 */
		->add(
				$CF->endpoint()
				->id(15)
				->methodRead()
				->table('event_member')
		)
		/*
		 * Detailed information about a user's family as represented in FQL.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/family
		 */
		->add(
				$CF->endpoint()
				->id(16)
				->methodRead()
				->table('family')
		)
		/*
		 * An FQL table that can be used to return a list of a user's friends or to show whether two users are friends.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/friend
		 */
		->add(
				$CF->endpoint()
				->id(17)
				->methodRead()
				->table('friend')
		)
		/*
		 * An FQL table which shows the pending friend requests sent by or to the current session user.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/friend_request
		 */
		->add(
				$CF->endpoint()
				->id(18)
				->methodRead()
				->table('friend_request')
		)
		/*
		 * An FQL table which returns any friend lists created by the current session user.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/friendlist
		 */
		->add(
				$CF->endpoint()
				->id(19)
				->methodRead()
				->table('friendlist')
		)
		/*
		 * An FQL table which shows whether a user is a member of a friend list.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/friendlist_member
		 */
		->add(
				$CF->endpoint()
				->id(20)
				->methodRead()
				->table('friendlist_member')
		)
		/*
		 * A group which users can join as represented in FQL.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/group
		 */
		->add(
				$CF->endpoint()
				->id(21)
				->methodRead()
				->table('group')
		)
		/*
		 * Contains the list of members for a group in FQL and can be queried by user or by group.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/group_member
		 */
		->add(
				$CF->endpoint()
				->id(22)
				->methodRead()
				->table('group_member')
		)
		/*
		 * An FQL table containing statistics about Applications, Pages, and Domains with 30 or more connections.
		 * Graph API objects have an equivalent Insights connection type.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/insights
		 */
		->add(
				$CF->endpoint()
				->id(23)
				->methodRead()
				->table('insights')
		)
		/*
		 * An FQL table that returns the IDs of users who like a given object (video, note, link, photo, or album).
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/like
		 */
		->add(
				$CF->endpoint()
				->id(24)
				->methodRead()
				->table('like')
		)
		/*
		 * An FQL table containing the links a user has posted.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/link
		 */
		->add(
				$CF->endpoint()
				->id(25)
				->methodRead()
				->table('link')
		)
		/*
		 * An FQL table for proxying link image urls.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/link_image_src
		 */
		->add(
				$CF->endpoint()
				->id(26)
				->methodRead()
				->table('link_image_src')
		)
		/*
		 * An FQL table containing counts that show how users on Facebook are interacting with a given link.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/link_stat
		 */
		->add(
				$CF->endpoint()
				->id(27)
				->methodRead()
				->table('link_stat')
		)
		/*
		 * An FQL table that returns Posts that have locations associated with them and that satisfy at least
		 * one of the following conditions:
		 *
		 * - you were tagged in the Post
		 * - a friend was tagged in the Post
		 * - you authored the Post
		 * - a friend authored the Post
		 *
		 * The User object in the Graph API has a corresponding /locations connection. In addition, by including
		 * with=location in the URL parameters, the /home, /feed, and/post connections on the User object can be
		 * filtered to just those posts containing a location.

		 *
		 * @link https://developers.facebook.com/docs/reference/fql/location_post
		 */
		->add(
				$CF->endpoint()
				->id(28)
				->methodRead()
				->table('location_post')
		)
		/*
		 * An FQL table containing information about a user's mailbox folders. The Graph API User object has an inbox
		 * connection that refers to the user's inbox folder.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/mailbox_folder
		 */
		->add(
				$CF->endpoint()
				->id(29)
				->methodRead()
				->table('mailbox_folder')
		)
		/*
		 * Information about messages in a thread as represented in FQL. To access this table you need an access token
		 * with extended read_mailbox permissions.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/message
		 */
		->add(
				$CF->endpoint()
				->id(30)
				->methodRead()
				->table('message')
		)
		/*
		 * An FQL table containing the notes that the current user has written.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/note
		 */
		->add(
				$CF->endpoint()
				->id(31)
				->methodRead()
				->table('note')
		)
		/*
		 * The current user's notifications as represented in FQL.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/notification
		 */
		->add(
				$CF->endpoint()
				->id(32)
				->methodRead()
				->table('notification')
		)
		/*
		 * Information about an Open Graph URL as represented in FQL.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/object_url
		 */
		->add(
				$CF->endpoint()
				->id(33)
				->methodRead()
				->table('object_url')
		)
		/*
		 * An FQL table that returns information about offers that a Page posts.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/offer
		 */
		->add(
				$CF->endpoint()
				->id(34)
				->methodRead()
				->table('offer')
		)
		/*
		 * To access country-level like counts and people talking about this (PTAT),
		 * use the page_fans_country and the page_storytellers_by_country metrics of
		 * the insights table.
		 * An FQL table that can be used to return information about a Facebook Page.
		 * The Page Graph API object provides similar information to this table.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/page
		 */
		->add(
				$CF->endpoint()
				->id(35)
				->methodRead()
				->table('page')
		)
		/*
		 * An FQL table containing information about the pages that a user is an admin of.
		 * The User Graph API object has a connection accounts which contains similar information.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/page_admin
		 */
		->add(
				$CF->endpoint()
				->id(36)
				->methodRead()
				->table('page_admin')
		)
		/*
		 * An FQL table that can be used to return a list of a users that are blocked
		 * from a Facebook Page.
		 * The Page Graph API object has an equivalent blocked connection that can also be used
		 * to block or unblock users.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/page_blocked_user
		 */
		->add(
				$CF->endpoint()
				->id(37)
				->methodRead()
				->table('page_blocked_user')
		)
		/*
		 * A Facebook user who likes a Page as represented in FQL.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/page_fan
		 */
		->add(
				$CF->endpoint()
				->id(38)
				->methodRead()
				->table('page_fan')
		)
		/*
		 * An FQL table that can be used to return the IDs of the child Pages related to this Global Page.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/page_global_brand_child
		 */
		->add(
				$CF->endpoint()
				->id(39)
				->methodRead()
				->table('page_global_brand_child')
		)
		/*
		 * An FQL table that returns information about a page's milestones.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/page_milestone
		 */
		->add(
				$CF->endpoint()
				->id(40)
				->methodRead()
				->table('page_milestone')
		)
		/*
		 * A representation of the permissions granted to your app by a User or Page represented in FQL.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/permissions
		 */
		->add(
				$CF->endpoint()
				->id(41)
				->methodRead()
				->table('permissions')
		)
		/*
		 * Descriptive information about extended permissions as represented in FQL.
		 * You can get detailed info about some specific permissions or get a list
		 * of all the supported permissions.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/permissions_info
		 */
		->add(
				$CF->endpoint()
				->id(42)
				->methodRead()
				->table('permissions_info')
		)
		/*
		 * Query this table to return information about a photo.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/photo
		 */
		->add(
				$CF->endpoint()
				->id(43)
				->methodRead()
				->table('photo')
		)
		/*
		 * Represents the source URL of a photo as represented in FQL.
		 * The Photo object has an equivalent src connection.
		 * Using photo_src FQL, you can retrieve images with the following
		 * dimensions: 960, 720, 480, 320, 180, 130, 75 pixels.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/photo_src
		 */
		->add(
				$CF->endpoint()
				->id(44)
				->methodRead()
				->table('photo_src')
		)
		/*
		 * A photo tag as represented in FQL.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/photo_tag
		 */
		->add(
				$CF->endpoint()
				->id(45)
				->methodRead()
				->table('photo_tag')
		)
		/*
		 * A place as represented in FQL
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/place
		 */
		->add(
				$CF->endpoint()
				->id(46)
				->methodRead()
				->table('place')
		)
		/*
		 * An FQL table that can be used to return a user's privacy setting
		 * for a video, note, link, photo, or photo album that they published.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/privacy
		 */
		->add(
				$CF->endpoint()
				->id(47)
				->methodRead()
				->table('privacy')
		)
		/*
		 * An FQL table that returns the default privacy settings that a user has set for an app.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/privacy_setting
		 */
		->add(
				$CF->endpoint()
				->id(48)
				->methodRead()
				->table('privacy_setting')
		)
		/*
		 * A profile for a user, group, page, event, or application as represented in FQL.
		 * This data represents certain (typically publicly) viewable data and can be thought
		 * of as a parent class of the user, group, page, event, or application tables
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/profile
		 */
		->add(
				$CF->endpoint()
				->id(49)
				->methodRead()
				->table('profile')
		)
		/*
		 *
		 *
		 * @link
		 */
		->add(
				$CF->endpoint()
				->id(50)
				->methodRead()
				->table('app_role')
		)
		/*
		 * An FQL table that returns profile pictures closest to a requested size.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/profile_pic
		 */
		->add(
				$CF->endpoint()
				->id(51)
				->methodRead()
				->table('profile_pic')
		)
		/*
		 * An FQL table that returns information about Page apps.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/profile_tab
		 */
		->add(
				$CF->endpoint()
				->id(52)
				->methodRead()
				->table('profile_tab')
		)
		/*
		 * An FQL table that returns information about Page apps.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/profile_view
		 */
		->add(
				$CF->endpoint()
				->id(53)
				->methodRead()
				->table('profile_view')
		)
		/*
		 * A Question as represented in FQL.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/question
		 */
		->add(
				$CF->endpoint()
				->id(54)
				->methodRead()
				->table('question')
		)
		/*
		 * This table returns one of the options available as the answer to a question, as represented in FQL.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/question_option
		 */
		->add(
				$CF->endpoint()
				->id(55)
				->methodRead()
				->table('question_option')
		)
		/*
		 * This table contains information about the users who have voted on a particular answer option for a question.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/question_option_votes
		 */
		->add(
				$CF->endpoint()
				->id(56)
				->methodRead()
				->table('question_option_votes')
		)
		/*
		 * A review of an application as represented in FQL.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/review
		 */
		->add(
				$CF->endpoint()
				->id(57)
				->methodRead()
				->table('review')
		)
		/*
		 * Information about a user's scores achieved in games as represented in FQL.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/score
		 */
		->add(
				$CF->endpoint()
				->id(58)
				->methodRead()
				->table('score')
		)
		/*
		 * An FQL table that returns square profile pictures closest to a requested size.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/square_profile_pic
		 */
		->add(
				$CF->endpoint()
				->id(59)
				->methodRead()
				->table('square_profile_pic')
		)
		/*
		 * An FQL table that returns the sizes of the square profile pictures that
		 * are available for all profiles. This list generally varies very slowly.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/square_profile_pic_size
		 */
		->add(
				$CF->endpoint()
				->id(60)
				->methodRead()
				->table('square_profile_pic_size')
		)
		/*
		 * An FQL table which shows whether two users are linked together as friends.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/standard_friend_info
		 */
		->add(
				$CF->endpoint()
				->id(61)
				->methodRead()
				->table('standard_friend_info')
		)
		/*
		 * An FQL table which returns basic information about a user.
		 * For use only for analytic information.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/standard_user_info
		 */
		->add(
				$CF->endpoint()
				->id(62)
				->methodRead()
				->table('standard_user_info')
		)
		/*
		 * A user's status messages as represented in FQL.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/status
		 */
		->add(
				$CF->endpoint()
				->id(63)
				->methodRead()
				->table('status')
		)
		/*
		 * An FQL table that can be used to return a list of a stream posts.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/stream
		 */
		->add(
				$CF->endpoint()
				->id(64)
				->methodRead()
				->table('stream')
		)
		/*
		 * A list of stream filters the user has available as represented in FQL.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/stream_filter
		 */
		->add(
				$CF->endpoint()
				->id(65)
				->methodRead()
				->table('stream_filter')
		)
		/*
		 * An FQL table that shows the association between a user or page and objects they tag.
		 *
		 * @link A list of stream filters the user has available as represented in FQL.
		 */
		->add(
				$CF->endpoint()
				->id(66)
				->methodRead()
				->table('stream_tag')
		)
		/*
		 * An FQL table that can be used to return a list of a user's subscribers or
		 * subscribees (someone who subscribes to a user)
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/subscription
		 */
		->add(
				$CF->endpoint()
				->id(67)
				->methodRead()
				->table('subscription')
		)
		/*
		 * An FQL table containing information about other FQL tables
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/table
		 */
		->add(
				$CF->endpoint()
				->id(68)
				->methodRead()
				->table('table')
		)
		/*
		 * Information about message threads in a user's inbox as represented in FQL.
		 * To access this table you need an access token with extended read_mailbox permissions.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/thread
		 */
		->add(
				$CF->endpoint()
				->id(69)
				->methodRead()
				->table('thread')
		)
		/*
		 * An FQL table which returns any translated strings for your app as well
		 * as the original untranslated strings.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/translation
		 */
		->add(
				$CF->endpoint()
				->id(70)
				->methodRead()
				->table('translation')
		)
		/*
		 * Access information about messages in a thread.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/unified_message
		 */
		->add(
				$CF->endpoint()
				->id(71)
				->methodRead()
				->table('unified_message')
		)
		/*
		 * Provides the number of threads in a specific folder.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/unified_message_count
		 */
		->add(
				$CF->endpoint()
				->id(72)
				->methodRead()
				->table('unified_message_count')
		)
		/*
		 * An FQL table that returns all the message IDs added or deleted for a given thread ID.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/unified_message_sync
		 */
		->add(
				$CF->endpoint()
				->id(73)
				->methodRead()
				->table('unified_message_sync')
		)
		/*
		 * Access information about threads in the new Facebook messaging system.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/unified_thread
		 */
		->add(
				$CF->endpoint()
				->id(74)
				->methodRead()
				->table('unified_thread')
		)
		/*
		 * This table should be used to access information about Add People and
		 * Leave Conversation actions performed on a thread in the new Facebook messaging
		 * system and is only applicable to group threads with three or more participants.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/unified_thread_action
		 */
		->add(
				$CF->endpoint()
				->id(75)
				->methodRead()
				->table('unified_thread_action')
		)
		/*
		 * Provides the number of threads in a specific folder.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/unified_thread_count
		 */
		->add(
				$CF->endpoint()
				->id(76)
				->methodRead()
				->table('unified_thread_count')
		)
		/*
		 * Access information for the threads added or deleted.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/unified_thread_sync
		 */
		->add(
				$CF->endpoint()
				->id(77)
				->methodRead()
				->table('unified_thread_sync')
		)
		/*
		 * An FQL table containing the Open Graph URLs that a user has Liked.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/url_like
		 */
		->add(
				$CF->endpoint()
				->id(78)
				->methodRead()
				->table('url_like')
		)
		/*
		 * A user profile as represented in FQL. If you need user information
		 * for analytic purposes, query the standard_user_info table instead.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/user
		 */
		->add(
				$CF->endpoint()
				->id(79)
				->methodRead()
				->table('user')
		)
		/*
		 * An FQL table containing information about videos.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/video
		 */
		->add(
				$CF->endpoint()
				->id(80)
				->methodRead()
				->table('video')
		)
		/*
		 * An FQL table containing information about a video tag. The video_tag
		 * table can be used to find all users tagged in a specific video, or all
		 * videos that a user has been tagged in. video_tag uses the same visibility
		 * constraints as video, so a user can see a video tag if and only if that
		 * user can see the video itself.
		 *
		 * @link https://developers.facebook.com/docs/reference/fql/video_tag
		 */
		->add(
				$CF->endpoint()
				->id(81)
				->methodRead()
				->table('video_tag')
		)
		->result($CF->result()->map(function($result) {
							return Hash::get($result, 'data');
						}))

;


$config['FacebookFQLSource']['config'] = $Config;