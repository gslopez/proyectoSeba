# encoding: UTF-8
# This file is auto-generated from the current state of the database. Instead
# of editing this file, please use the migrations feature of Active Record to
# incrementally modify your database, and then regenerate this schema definition.
#
# Note that this schema.rb definition is the authoritative source for your
# database schema. If you need to create the application database on another
# system, you should be using db:schema:load, not running all the migrations
# from scratch. The latter is a flawed and unsustainable approach (the more migrations
# you'll amass, the slower it'll run and the greater likelihood for issues).
#
# It's strongly recommended to check this file into your version control system.

ActiveRecord::Schema.define(:version => 20120922224142) do

  create_table "calificacions", :force => true do |t|
    t.text     "texto"
    t.integer  "numero"
    t.integer  "vendedor"
    t.integer  "comprador"
    t.datetime "created_at", :null => false
    t.datetime "updated_at", :null => false
  end

  create_table "categoria", :force => true do |t|
    t.string   "nombre"
    t.datetime "created_at", :null => false
    t.datetime "updated_at", :null => false
  end

  create_table "orden_de_compras", :force => true do |t|
    t.boolean  "realizado"
    t.datetime "fechaEntrega"
    t.string   "puntoEntrega"
    t.datetime "created_at",   :null => false
    t.datetime "updated_at",   :null => false
  end

  create_table "productos", :force => true do |t|
    t.string   "nombre"
    t.datetime "created_at",        :null => false
    t.datetime "updated_at",        :null => false
    t.string   "foto_file_name"
    t.string   "foto_content_type"
    t.integer  "foto_file_size"
    t.datetime "foto_updated_at"
  end

  create_table "publicacions", :force => true do |t|
    t.integer  "idProducto"
    t.integer  "precio"
    t.text     "detalles"
    t.datetime "created_at",        :null => false
    t.datetime "updated_at",        :null => false
    t.string   "foto_file_name"
    t.string   "foto_content_type"
    t.integer  "foto_file_size"
    t.datetime "foto_updated_at"
  end

  create_table "usuarios", :force => true do |t|
    t.string   "nombre"
    t.string   "user"
    t.string   "password"
    t.integer  "ve"
    t.integer  "vf"
    t.integer  "vn"
    t.datetime "created_at", :null => false
    t.datetime "updated_at", :null => false
  end

end