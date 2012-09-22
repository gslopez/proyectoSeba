# Be sure to restart your server when you modify this file.

# Your secret key for verifying cookie session data integrity.
# If you change this key, all old sessions will become invalid!
# Make sure the secret is at least 30 characters and all random, 
# no regular words or you'll be exposed to dictionary attacks.
ActionController::Base.session = {
  :key         => '_cheaper_session',
  :secret      => '8b70f0aceb39f552da8ad08f9127416a916f1c0716dd0712d4a7d246bbd3a4d223846650a4e6091fc2d9685b12022952d7a1fecfb6352688df463f8b24361ed6'
}

# Use the database for sessions instead of the cookie-based default,
# which shouldn't be used to store highly confidential information
# (create the session table with "rake db:sessions:create")
# ActionController::Base.session_store = :active_record_store
