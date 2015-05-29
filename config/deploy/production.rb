set :stage, :production

server 'timmygelles.com', user: 'timmygel', roles: %w{web app db}

set :ssh_options, {
keys: %w(~/.ssh/timmygel_rsa),
}

fetch(:default_env).merge!(wp_env: :production)