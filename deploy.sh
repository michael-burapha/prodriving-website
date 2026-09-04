#!/usr/bin/env bash
#
# Deploy prodriving.dk to the Plesk VPS.
#
# Usage:  ./deploy.sh
# You will be prompted for the SSH password once (twice on the first run,
# because removing the old index.html is a separate SSH call).
#
set -euo pipefail

REMOTE_USER="prodriving.dk_rkuo7ig0aqn"
REMOTE_HOST="31.70.112.42"
REMOTE_PATH="/var/www/vhosts/prodriving.dk/httpdocs"
LOCAL_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"

echo "==> Deploying $LOCAL_DIR  ->  $REMOTE_USER@$REMOTE_HOST:$REMOTE_PATH"
echo

# IMPORTANT: the site used to be index.html. Apache serves index.html before
# index.php, so the old file must be gone or the new homepage never shows.
echo "==> Removing the legacy index.html on the server (if present)"
ssh "$REMOTE_USER@$REMOTE_HOST" "rm -f $REMOTE_PATH/index.html"

echo
echo "==> Syncing files"
# No --delete: the server holds files we intentionally don't track locally.
rsync -avz \
  --exclude '.git/' \
  --exclude '.claude/' \
  --exclude 'hero/' \
  --exclude 'DESIGN.md' \
  --exclude 'deploy.sh' \
  --exclude '.DS_Store' \
  "$LOCAL_DIR/" \
  "$REMOTE_USER@$REMOTE_HOST:$REMOTE_PATH/"

echo
echo "==> Done. Verify:"
echo "    https://prodriving.dk/"
echo "    https://prodriving.dk/korekort-til-bil-aalborg/"
echo "    https://prodriving.dk/generhvervelse-aalborg/"
echo "    https://prodriving.dk/saerlig-koreundervisning/"
echo "    https://prodriving.dk/rutinetimer-aalborg/"
