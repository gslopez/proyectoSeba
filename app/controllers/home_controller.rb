class HomeController < ApplicationController
  def index

  	@categorias_base=Categoria.all
 
  end

end
