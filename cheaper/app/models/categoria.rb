class Categoria < ActiveRecord::Base
  attr_accessible :nombre
  has_many :publicaciones
  has_many :categorias
end
