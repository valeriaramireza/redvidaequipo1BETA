<?php

/**
 * This is the model class for table "paciente".
 *
 * The followings are the available columns in table 'paciente':
 * @property string $rut_paciente
 * @property string $primer_nombre_paciente
 * @property string $seg_nombre_paciente
 * @property string $fecha_de_nacimiento
 * @property string $direccion_paciente
 * @property string $tel_movil_paciente
 * @property string $tel_fijo_paciente
 * @property string $e_mail_paciente
 * @property string $afiliacion
 * @property string $enfermedad
 * @property string $grado_de_urgencia
 * @property string $necesidad_de_trasplante
 * @property string $tipo_de_sangre_paciente
 * @property string $apellido_paterno_paciente
 * @property string $apellido_materno_paciente
 * @property string $cod_area
 * @property string $centro_medico
 *
 * The followings are the available model relations:
 * @property GestionaPaciente[] $gestionaPacientes
 * @property CentroMedico $centroMedico
 * @property RecibeTransfusion[] $recibeTransfusions
 * @property RecibeTrasplanteMedula[] $recibeTrasplanteMedulas
 * @property RecibeTrasplanteOrgano[] $recibeTrasplanteOrganos
 */
class Paciente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'paciente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rut_paciente', 'required'),
			array('rut_paciente, centro_medico', 'length', 'max'=>12),
			array('primer_nombre_paciente, seg_nombre_paciente, apellido_paterno_paciente, apellido_materno_paciente', 'length', 'max'=>60),
			array('fecha_de_nacimiento', 'length', 'max'=>10),
			array('direccion_paciente', 'length', 'max'=>50),
			array('tel_movil_paciente, tel_fijo_paciente, cod_area', 'length', 'max'=>8),
			array('e_mail_paciente', 'length', 'max'=>30),
			array('afiliacion', 'length', 'max'=>20),
			array('enfermedad, grado_de_urgencia', 'length', 'max'=>140),
			array('tipo_de_sangre_paciente', 'length', 'max'=>3),
			array('necesidad_de_trasplante', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('rut_paciente, primer_nombre_paciente, seg_nombre_paciente, fecha_de_nacimiento, direccion_paciente, tel_movil_paciente, tel_fijo_paciente, e_mail_paciente, afiliacion, enfermedad, grado_de_urgencia, necesidad_de_trasplante, tipo_de_sangre_paciente, apellido_paterno_paciente, apellido_materno_paciente, cod_area, centro_medico', 'safe', 'on'=>'search'),
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
			'gestionaPacientes' => array(self::HAS_MANY, 'GestionaPaciente', 'rut_paciente'),
			'centroMedico' => array(self::BELONGS_TO, 'CentroMedico', 'centro_medico'),
			'recibeTransfusions' => array(self::HAS_MANY, 'RecibeTransfusion', 'rut_paciente'),
			'recibeTrasplanteMedulas' => array(self::HAS_MANY, 'RecibeTrasplanteMedula', 'rut_paciente'),
			'recibeTrasplanteOrganos' => array(self::HAS_MANY, 'RecibeTrasplanteOrgano', 'rut_paciente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'rut_paciente' => 'Rut Paciente',
			'primer_nombre_paciente' => 'Primer Nombre Paciente',
			'seg_nombre_paciente' => 'Seg Nombre Paciente',
			'fecha_de_nacimiento' => 'Fecha De Nacimiento',
			'direccion_paciente' => 'Direccion Paciente',
			'tel_movil_paciente' => 'Tel Movil Paciente',
			'tel_fijo_paciente' => 'Tel Fijo Paciente',
			'e_mail_paciente' => 'E Mail Paciente',
			'afiliacion' => 'Afiliacion',
			'enfermedad' => 'Enfermedad',
			'grado_de_urgencia' => 'Grado De Urgencia',
			'necesidad_de_trasplante' => 'Necesidad De Trasplante',
			'tipo_de_sangre_paciente' => 'Tipo De Sangre Paciente',
			'apellido_paterno_paciente' => 'Apellido Paterno Paciente',
			'apellido_materno_paciente' => 'Apellido Materno Paciente',
			'cod_area' => 'Cod Area',
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

		$criteria->compare('rut_paciente',$this->rut_paciente,true);
		$criteria->compare('primer_nombre_paciente',$this->primer_nombre_paciente,true);
		$criteria->compare('seg_nombre_paciente',$this->seg_nombre_paciente,true);
		$criteria->compare('fecha_de_nacimiento',$this->fecha_de_nacimiento,true);
		$criteria->compare('direccion_paciente',$this->direccion_paciente,true);
		$criteria->compare('tel_movil_paciente',$this->tel_movil_paciente,true);
		$criteria->compare('tel_fijo_paciente',$this->tel_fijo_paciente,true);
		$criteria->compare('e_mail_paciente',$this->e_mail_paciente,true);
		$criteria->compare('afiliacion',$this->afiliacion,true);
		$criteria->compare('enfermedad',$this->enfermedad,true);
		$criteria->compare('grado_de_urgencia',$this->grado_de_urgencia,true);
		$criteria->compare('necesidad_de_trasplante',$this->necesidad_de_trasplante,true);
		$criteria->compare('tipo_de_sangre_paciente',$this->tipo_de_sangre_paciente,true);
		$criteria->compare('apellido_paterno_paciente',$this->apellido_paterno_paciente,true);
		$criteria->compare('apellido_materno_paciente',$this->apellido_materno_paciente,true);
		$criteria->compare('cod_area',$this->cod_area,true);
		$criteria->compare('centro_medico',$this->centro_medico,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Paciente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
