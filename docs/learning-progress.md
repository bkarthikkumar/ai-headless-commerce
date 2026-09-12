# 6-Month Full-Stack Journey

Start Date: September 7, 2026

Current Day: 4

## Environment

- Docker: Ready
- PHP 8.4: Ready
- Composer: Ready
- Node.js: Ready
- npm: Ready
- Git: Ready
- MySQL 8.0: Ready
- Redis 7: Ready
- PHP Redis Extension: Ready

## Progress

### Day 0

- [x] Docker development environment
- [x] Development container
- [x] PHP 8.4
- [x] Composer
- [x] Node.js
- [x] MySQL
- [x] Redis
- [x] Docker networking
- [x] Git repository commit

### Day 1

- [x] Create Laravel project
- [x] Verify Laravel 13.30.1
- [x] Verify Laravel application starts
- [x] Configure Laravel → MySQL
- [x] Run MySQL migrations
- [x] Configure Laravel → Redis
- [x] Install PHP Redis extension
- [x] Verify Laravel → Redis
- [x] Verify Laravel → MySQL
- [x] Git commit and push

### Day 2

- [x] Understand Laravel project structure
- [x] Understand Laravel request lifecycle
- [x] Understand routes and controllers
- [x] Create controller
- [x] Create basic routes
- [x] Understand route parameters
- [x] Test Laravel routes

### Day 3

- [x] Configure Laravel API routing
- [x] Understand API routes
- [x] Create ProductController
- [x] Create GET `/api/products`
- [x] Create GET `/api/products/{id}`
- [x] Create POST `/api/products`
- [x] Add request validation
- [x] Handle validation errors
- [x] Create PUT `/api/products/{id}`
- [x] Create DELETE `/api/products/{id}`
- [x] Handle 404 responses
- [x] Return JSON responses
- [x] Test CRUD API endpoints
- [x] Understand REST API basics
- [x] Git commit and push

### Day 4 — Database-backed Product CRUD

- [x] Create Product database migration
- [x] Define product database schema
- [x] Add `name` field
- [x] Add unique `sku` field
- [x] Add nullable `description`
- [x] Add decimal `price`
- [x] Add boolean `status`
- [x] Run database migrations
- [x] Verify Product database table
- [x] Create Product Eloquent model
- [x] Configure Product `$fillable`
- [x] Connect Laravel API to MySQL
- [x] Create database-backed Product controller
- [x] Create GET `/api/dbproducts`
- [x] Return products from MySQL
- [x] Create POST `/api/dbproducts`
- [x] Create `StoreProductRequest`
- [x] Add Product creation validation
- [x] Configure Form Request authorization
- [x] Use validated request data
- [x] Create GET `/api/dbproducts/{id}`
- [x] Handle missing products with `findOrFail()`
- [x] Create `UpdateProductRequest`
- [x] Create PUT `/api/dbproducts/{id}`
- [x] Validate Product updates
- [x] Handle unique SKU during updates
- [x] Use `Rule::unique()->ignore()` for SKU validation
- [x] Validate price and other Product fields
- [x] Create DELETE `/api/dbproducts/{id}`
- [x] Verify deleted products return 404
- [x] Verify nonexistent Product operations return 404
- [x] Test complete database-backed CRUD flow in Postman
- [x] Refactor controller to use validated Form Request data
- [x] Understand Laravel Form Requests
- [x] Understand Eloquent mass assignment
- [x] Understand database-backed REST CRUD
- [x] Understand advanced unique validation for updates
- [x] Understand `findOrFail()` and automatic 404 handling
- [ ] Git commit and push

## Day 4 API Endpoints

```text
GET     /api/dbproducts
POST    /api/dbproducts
GET     /api/dbproducts/{id}
PUT     /api/dbproducts/{id}
DELETE  /api/dbproducts/{id}
```

## Day 4 Key Laravel Concepts

- Eloquent Models
- Eloquent `$fillable`
- Database migrations
- Form Requests
- Request validation
- `$request->validated()`
- `Rule::unique()->ignore()`
- `findOrFail()`
- Mass assignment protection
- RESTful CRUD
- HTTP status codes
- JSON API responses
- MySQL-backed Laravel APIs

## Next

### Day 5

- Advanced Laravel API architecture
- Route Model Binding
- API Resources
- Cleaner API response structures
- API error handling
- Repository/Service patterns where justified
- Prepare Laravel API for frontend integration
