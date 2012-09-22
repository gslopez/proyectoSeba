class AddAttachmentFotoToPublicacions < ActiveRecord::Migration
  def self.up
    change_table :publicacions do |t|
      t.has_attached_file :foto
    end
  end

  def self.down
    drop_attached_file :publicacions, :foto
  end
end
