Good luck in Your Sql 

Note that use condition as post_type.

UPDATE prefix_posts SET post_content = replace(post_content, 'Existing URL', 'New URL') WHERE 1

UPDATE prefix_postmeta SET meta_value = replace(meta_value,'Existing URL','New URL') WHERE 1

UPDATE prefix_usermeta SET meta_value = replace(meta_value, 'Existing URL','New URL') WHERE 1

UPDATE prefix_links SET link_url = replace(link_url, 'Existing URL','New URL') WHERE 1

UPDATE prefix_comments SET comment_content = replace(comment_content , 'Existing URL','New URL') WHERE 1

UPDATE prefix_posts SET guid = replace(guid, 'Existing URL','New URL') WHERE 1
