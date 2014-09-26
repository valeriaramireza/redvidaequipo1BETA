<?php

/**
 * This is the model class for table "donante".
 *
 * The followings are the available columns in table 'donante':
 * @property string $rut_donante
 * @property string $primer_nombre_donante
 * @property string $seg_nombre_donante
 * @property string $apellido_paterno_donante
 * @property string $apellido_materno_donante
 * @property string $contrasena_donante
 * @property string $fecha_de_nacimiento
 * @property string $tel_fijo_donante
 * @property string $tel_movil_donante
 * @property string $direccion_donante
 * @property string $e_mail_donante
 * @property string $tipo_donante
 * @property string $tipo_sangre_donante
 * @property string $cod_area
 * @property string $alergia
 * @property string $centro_medico
 *
 * The followings are the available model relations:
 * @property DonaSangre[] $donaSangres
 * @property CentroMedico $centroMedico
 * @property Gestiona[] $gestionas
 * @property GestionaDonante[] $gestionaDonantes
 * @property RecibeTrasplanteMedula[] $recibeTrasplanteMedulas
 * @property RecibeTrasplanteOrgano[] $recibeTrasplanteOrganos
 */
class Donante extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'donante';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rut_donante', 'required'),
			array('rut_donante, centro_medico', 'length', 'max'=>12),
			array('primer_nombre_donante, seg_nombre_donante, apellido_paterno_donante, apellido_materno_donante', 'length', 'max'=>60),
			array('contrasena_donante, tel_movil_donante, e_mail_donante', 'length', 'max'=>30),
			array('fecha_de_nacimiento', 'length', 'max'=>10),
			array('tel_fijo_donante, cod_area', 'length', 'max'=>8),
			array('direccion_donante', 'length', 'max'=>50),
			array('tipo_sangre_donante', 'length', 'max'=>3),
			array('tipo_donante, alergia', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('rut_donante, primer_nombre_donante, seg_nombre_donante, apellido_paterno_donante, apellido_materno_donante, contrasena_donante, fecha_de_nacimiento, tel_fijo_donante, tel_movil_donante, direccion_donante, e_mail_donante, tipo_donante, tipo_sangre_donante, cod_area, alergia, centro_medico', 'safe', 'on'=>'search'),
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
			'donaSangres' => array(self::HAS_MANY, 'DonaSangre', 'rut_donante'),
			'centroMedico' => array(self::BELONGS_TO, 'CentroMedico', 'centro_medico'),
			'gestionas' => array(self::HAS_MANY, 'Gestiona', 'rut_donante'),
			'gestionaDonantes' => array(self::HAS_MANY, 'GestionaDonante', 'rut_donante'),
			'recibeTrasplanteMedulas' => array(self::HAS_MANY, 'RecibeTrasplanteMedula', 'rut_donante'),
			'recibeTrasplanteOrganos' => array(self::HAS_MANY, 'RecibeTrasplanteOrgano', 'rut_donante'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'rut_donante' => 'Rut Donante',
			'primer_nombre_donante' => 'Primer Nombre Donante',
			'seg_nombre_donante' => 'Seg Nombre Donante',
			'apellido_paterno_donante' => 'Apellido Paterno Donante',
			'apellido_materno_donante' => 'Apellido Materno Donante',
			'contrasena_donante' => 'Contrasena Donante',
			'fecha_de_nacimiento' => 'Fecha De Nacimiento',
			'tel_fijo_donante' => 'Tel Fijo Donante',
			'tel_movil_donante' => 'Tel Movil Donante',
			'direccion_donante' => 'Direccion Donante',
			'e_mail_donante' => 'E Mail Donante',
			'tipo_donante' => 'Tipo Donante',
			'tipo_sangre_donante' => 'Tipo Sangre Donante',
			'cod_area' => 'Cod Area',
			'alergia' => 'Alergia',
			'centro_medico' => 'Centro Medico',
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

		$criteria->compare('rut_donante',$this->rut_donante,true);
		$criteria->compare('primer_nombre_donante',$this->primer_nombre_donante,true);
		$criteria->compare('seg_nombre_donante',$this->seg_nombre_donante,true);
		$criteria->compare('apellido_paterno_donante',$this->apellido_paterno_donante,true);
		$criteria->compare('apellido_materno_donante',$this->apellido_materno_donante,true);
		$criteria->compare('contrasena_donante',$this->contrasena_donante,true);
		$criteria->compare('fecha_de_nacimiento',$this->fecha_de_nacimiento,true);
		$criteria->compare('tel_fijo_donante',$this->tel_fijo_donante,true);
		$criteria->compare('tel_movil_donante',$this->tel_movil_donante,true);
		$criteria->compare('direccion_donante',$this->direccion_donante,true);
		$criteria->compare('e_mail_donante',$this->e_mail_donante,true);
		$criteria->compare('tipo_donante',$this->tipo_donante,true);
		$criteria->compare('tipo_sangre_donante',$this->tipo_sangre_donante,true);
		$criteria->compare('cod_area',$this->cod_area,true);
		$criteria->compare('alergia',$this->alergia,true);
		$criteria->compare('centro_medico',$this->centro_medico,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Donante the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
