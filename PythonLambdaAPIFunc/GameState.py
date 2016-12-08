from __future__ import print_function


import pusher
import json

print('Loading function')


def lambda_handler(event, context):
	pusher_client = pusher.Pusher(
	  app_id='264669',
	  key='01e18c2040acf98343e4',
	  secret='ea1e9d94cf9589faad4c',
	  ssl=True
	)

	pusher_client.trigger('test_channel', 'my_event', {'message': 'event["state"]'})
