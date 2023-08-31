#!/bin/bash
# Replace with your actual deployment steps
echo "Deploying from GitHub to cPanel..."
# Pull latest changes from GitHub
git pull origin main
# Copy files to cPanel directory
rsync -avz --exclude='.git' --exclude='deploy.sh' ./ palashba@palashbala.com:/home/palashba/public_html/cabinfield/
echo "Deployment completed."
