#!/bin/bash

# Kill any existing servers
pkill -f "vite" 2>/dev/null
pkill -f "php -S" 2>/dev/null

echo "🚀 Starting development servers..."
echo ""

# Load NVM and use Node 20
export NVM_DIR="$HOME/.nvm"
[ -s "$NVM_DIR/nvm.sh" ] && \. "$NVM_DIR/nvm.sh"
nvm use 20

# Start Vite in background
npm run dev &
sleep 3

# Start PHP server
echo ""
echo "✅ Vite dev server: http://localhost:5173"
echo "✅ PHP server: http://localhost:8000"
echo ""
echo "Open: http://localhost:8000"
echo ""
echo "Press Ctrl+C to stop both servers"

npm run php

