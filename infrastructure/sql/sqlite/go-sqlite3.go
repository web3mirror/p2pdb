package sqlite

import (
    "database/sql"
    "fmt"
    _ "github.com/mattn/go-sqlite3"
)
type sqlite interface {
    connect()
	select()
	insert()
	update()
	delete()
	get()
}

