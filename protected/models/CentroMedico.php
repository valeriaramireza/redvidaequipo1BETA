<?php

/**
 * This is the model class for table "centro_medico".
 *
 * The followings are the available columns in table 'centro_medico':
 * @property string $rut_centro_medico
 * @property string $nombre_centro_medico
 * @property string $direccion_centro_medico
 * @property string $e_mail_centro_medico
 * @property string $telefono_fijo_centro_medico
 * @property string $cod_area
 *
 * The followings are the available model relations:
 * @property Donante[] $donantes
 * @property GestionCentroMedico[] $gestionCentroMedicos
 * @property Paciente[] $pacientes
 * @property Usuario[] $usuarios
 */
class CentroMedico extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'centro_medico';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rut_centro_medico', 'required'),
			array('rut_centro_medico', 'length', 'max'=>12),
			array('nombre_centro_medico', 'length', 'max'=>60),
			array('direccion_centro_medico', 'length', 'max'=>50),
			array('e_mail_centro_medico', 'length', 'max'=>30),
			array('telefono_fijo_centro_medico, cod_area', 'length', 'max'=>8),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('rut_centro_medico, nombre_centro_medico, direccion_centro_medico, e_mail_centro_medico, telefono_fijo_centro_medico, cod_area', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'donantes' => array(self::HAS_MANY, 'Donante', 'centro_medico'),
			'gestionCentroMedicos' => array(self::HAS_MANY, 'GestionCentroMedico', 'rut_centro_medico'),
			'pacientes' => array(self::HAS_MANY, 'Paciente', 'centro_medico'),
			'usuarios' => array(self::HAS_MANY, 'Usuario', 'centro_medico'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'rut_centro_medico' => 'RUT Centro Medico',
			'nombre_centro_medico' => 'Nombre Centro Medico',
			'direccion_centro_medico' => 'Dirección Centro Medico',
			'e_mail_centro_medico' => 'E-Mail Centro Medico',
                        'cod_area' => 'Código de Area Teléfono Fijo',
			'telefono_fijo_centro_medico' => 'Telefono Fijo Centro Medico',
			
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('rut_centro_medico',$this->rut_centro_medico,true);
		$criteria->compare('nombre_centro_medico',$this->nombre_centro_medico,true);
		$criteria->compare('direccion_centro_medico',$this->direccion_centro_medico,true);
		$criteria->compare('e_mail_centro_medico',$this->e_mail_centro_medico,true);
		$criteria->compare('telefono_fijo_centro_medico',$this->telefono_fijo_centro_medico,true);
		$criteria->compare('cod_area',$this->cod_area,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CentroMedico the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
