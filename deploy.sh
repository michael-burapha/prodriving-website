#!/usr/bin/env bash
#
# Deploy prodriving.dk to the Plesk VPS.
#
# Usage:  ./deploy.sh
#
# Connects as the "prodriving" host alias in ~/.ssh/config, which uses the
# key ~/.ssh/id_ed25519_prodriving -- so no password prompt. If you ever get
# asked for one, the key is missing from the server; re-run:
#     ssh-copy-id -i ~/.ssh/id_ed25519_prodriving.pub prodriving.dk_rkuo7ig0aqn@31.70.112.42
#
set -euo pipefail

REMOTE="prodriving"                     # see ~/.ssh/config
REMOTE_PATH="/var/www/vhosts/prodriving.dk/httpdocs"
LOCAL_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"

echo "==> Deploying $LOCAL_DIR  ->  $REMOTE:$REMOTE_PATH"
echo

# IMPORTANT: the site used to be index.html. Apache serves index.html before
# index.php, so the old file must be gone or the new homepage never shows.
echo "==> Removing the legacy index.html on the server (if present)"
ssh "$REMOTE" "rm -f $REMOTE_PATH/index.html"

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
  "$REMOTE:$REMOTE_PATH/"

echo
echo "==> Done. Verify:"
echo "    https://prodriving.dk/"
echo "    https://prodriving.dk/korekort-til-bil-aalborg/"
echo "    https://prodriving.dk/generhvervelse-aalborg/"
echo "    https://prodriving.dk/saerlig-koreundervisning/"
echo "    https://prodriving.dk/rutinetimer-aalborg/"
