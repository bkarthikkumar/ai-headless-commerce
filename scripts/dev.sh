#!/bin/sh

set -e

# Always run from the project root
cd "$(dirname "$0")/.."

case "$1" in

  start)
    echo "Starting containers..."
    docker compose up -d
    echo ""
    docker compose ps
    ;;

  stop)
    echo "Stopping containers..."
    docker compose down
    ;;

  restart)
    echo "Restarting containers..."
    docker compose down
    docker compose up -d
    echo ""
    docker compose ps
    ;;

  status)
    docker compose ps
    ;;

  shell)
    docker compose exec dev bash
    ;;

  *)
    echo "Usage: $0 {start|stop|restart|status|shell}"
    echo ""
    echo "Commands:"
    echo "  start    Start all containers"
    echo "  stop     Stop all containers"
    echo "  restart  Restart all containers"
    echo "  status   Show container status"
    echo "  shell    Open shell inside development container"
    exit 1
    ;;

esac
