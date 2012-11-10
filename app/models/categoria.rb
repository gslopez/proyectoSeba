class Categoria < ActiveRecord::Base
	attr_accessible :nombre
	attr_accessible :name, :parent_id 
  	belongs_to :categoria
  	has_many :categorias
  	acts_as_nested_set




end
